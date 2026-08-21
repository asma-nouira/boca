/* =========================================================
   BOCA — Sous-services en accordéon (menu header / overlay)
   Version simplifiée
   =========================================================

   Contexte : les sous-services (Examen et nettoyage, Blanchiment,
   Implants dentaires...) ont été ajoutés directement dans le
   menu WordPress, sous chaque service principal. Ils sont donc
   déjà dans le HTML — sous la forme d'un <ul class="menu-col__list">
   imbriqué juste après le <li> du service principal — mais rien
   ne les cache : ils s'affichent tous à plat, ce qui alourdit
   visuellement le menu (c'est ce qui n'était pas prévu dans la
   maquette).

   Ce script ne va rien chercher par API : il repère simplement,
   dans le HTML déjà présent, les listes imbriquées et les
   transforme en accordéon (repliées par défaut, un bouton "+"
   pour les ouvrir). Aucune requête réseau, aucune dépendance à
   la structure des pages WordPress.

   Fonctionne à l'identique en desktop (menu overlay) et en
   mobile (même DOM, juste restylé par boca-menu-mobile.css).
   ========================================================= */

(function () {
  "use strict";

  var uidCounter = 0;

  function enhance(subList) {
    var parentLi = subList.previousElementSibling;
    if (!parentLi || parentLi.tagName !== "LI") return;

    var anchor = parentLi.querySelector("a");
    if (!anchor) return;

    uidCounter += 1;
    subList.classList.add("menu-service-sub");
    subList.id = subList.id || "menu-service-sub-" + uidCounter;

    // Ligne : lien existant + bouton "+", sans recréer le lien
    var row = document.createElement("div");
    row.className = "menu-service-row";

    var toggle = document.createElement("button");
    toggle.type = "button";
    toggle.className = "menu-service-toggle";
    toggle.setAttribute("aria-expanded", "false");
    toggle.setAttribute("aria-controls", subList.id);
    toggle.setAttribute(
      "aria-label",
      "Voir les soins liés à " + anchor.textContent.trim()
    );
    toggle.textContent = "+";

    parentLi.insertBefore(row, anchor);
    row.appendChild(anchor);
    row.appendChild(toggle);
    parentLi.classList.add("has-sub-services");

    var isOpen = false;
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      isOpen = !isOpen;
      parentLi.classList.toggle("is-open", isOpen);
      toggle.setAttribute("aria-expanded", String(isOpen));
      subList.style.maxHeight = isOpen ? subList.scrollHeight + "px" : "0px";
    });
  }

  function init() {
    // Toute liste ".menu-col__list" imbriquée dans une autre
    // ".menu-col__list" est une liste de sous-services.
    document
      .querySelectorAll("ul.menu-col__list ul.menu-col__list")
      .forEach(function (subList) {
        if (subList.classList.contains("menu-service-sub")) return;
        enhance(subList);
      });

    initServicesToggle();
  }

  /* Bouton "Voir plus de nos services dentaires" (mobile) : la liste
     des services principaux est repliée par défaut (via la classe
     is-collapsed posée côté PHP) pour raccourcir le menu mobile ;
     ce bouton la déplie/replie. Le CSS ne montre ce bouton et
     n'applique le repli qu'en dessous de 992px — en desktop la
     liste reste affichée normalement. */
  function initServicesToggle() {
    document.querySelectorAll(".menu-services-toggle-all").forEach(function (btn) {
      if (btn.dataset.enhanced) return;
      btn.dataset.enhanced = "true";

      var list = btn.nextElementSibling;
      if (!list || !list.classList.contains("menu-col__list--services")) return;

      btn.addEventListener("click", function () {
        var collapsed = list.classList.toggle("is-collapsed");
        btn.setAttribute("aria-expanded", String(!collapsed));
        btn.textContent = collapsed ? btn.dataset.labelMore : btn.dataset.labelLess;
      });
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
