/* =========================================================
   BOCA — Script d'animations au scroll
   À enqueuer en "defer", après jQuery et après slick.min.js.
   Ne touche à aucune logique existante : ajoute seulement
   des classes CSS déclenchées par le scroll et le hover.
   ========================================================= */

(function () {
  "use strict";

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* -------------------------------------------------------
     1. Header sticky : ajoute .is-scrolled après 60px
     ------------------------------------------------------- */
  var header = document.querySelector("header.site-header");
  if (header) {
    var onScrollHeader = function () {
      if (window.scrollY > 60) {
        header.classList.add("is-scrolled");
      } else {
        header.classList.remove("is-scrolled");
      }
    };
    window.addEventListener("scroll", onScrollHeader, { passive: true });
    onScrollHeader();
  }

  /* -------------------------------------------------------
     2. Reveal au scroll (fade-up) via IntersectionObserver
     Cible automatiquement :
       - les titres (h1, h2, h3) hors du header
       - les colonnes de contenu du page builder (.vce-col-content)
       - les images de contenu (hors logo / icônes de carrousel)
     Ajoute .reveal-up au chargement, puis .in-view quand
     l'élément entre dans le viewport (une seule fois).
     ------------------------------------------------------- */
  if (!reduceMotion && "IntersectionObserver" in window) {
    var targets = document.querySelectorAll(
      "main h1, main h2, main h3, .vce-col-content > *, main img:not(.slick-slide img)"
    );

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -40px 0px" }
    );

    targets.forEach(function (el, index) {
      // Ne pas animer les éléments déjà visibles dans le hero
      // au premier chargement (au-dessus de la ligne de flottaison).
      var rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0 && index < 6) {
        return;
      }
      el.classList.add("reveal-up");
      // Cascade légère pour les éléments côte à côte (groupes de 4 max)
      var delay = (index % 4) + 1;
      el.classList.add("reveal-delay-" + delay);
      observer.observe(el);
    });
  }

  /* -------------------------------------------------------
     3. Parallax léger sur la section "feuille de palmier"
     Cherche un bloc marqué data-parallax (à ajouter une fois
     dans l'éditeur VC sur la ligne concernée, en "Custom CSS
     class"), sinon ne fait rien.
     ------------------------------------------------------- */
  if (!reduceMotion) {
    var parallaxEls = document.querySelectorAll("[data-parallax]");
    if (parallaxEls.length) {
      var onScrollParallax = function () {
        parallaxEls.forEach(function (el) {
          var rect = el.getBoundingClientRect();
          var speed = parseFloat(el.getAttribute("data-parallax")) || 0.15;
          var offset = rect.top * speed;
          el.style.backgroundPosition = "center calc(50% + " + offset + "px)";
        });
      };
      window.addEventListener("scroll", onScrollParallax, { passive: true });
      onScrollParallax();
    }
  }

  /* -------------------------------------------------------
     4. FAQ : s'assure que l'icône a bien la classe portée
     par le title au moment de l'ouverture (VCE gère déjà le
     slideToggle jQuery ; on ne fait qu'exposer un hook CSS
     supplémentaire si le markup change de structure).
     ------------------------------------------------------- */
  document.querySelectorAll(".vce-faq-toggle-title").forEach(function (title) {
    title.addEventListener("click", function () {
      // Laisse VCE gérer l'ouverture/fermeture ; on synchronise juste
      // une classe utilitaire pour d'éventuels styles additionnels.
      window.requestAnimationFrame(function () {
        var opened = title.classList.contains("vce-faq-toggle-state--opened");
        title.closest(".vce-faq-toggle").classList.toggle("is-open", opened);
      });
    });
  });
})();
