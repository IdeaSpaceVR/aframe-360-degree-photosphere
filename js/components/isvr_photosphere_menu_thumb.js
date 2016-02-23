(function() {

  var isvr_photosphere_menu_thumb = {

    init: function() {

      this.el.addEventListener('click', this.onClick.bind(this));
      this.el.addEventListener('touchstart', this.onClick.bind(this));

    },

    onClick: function() {

      if (this.el.parentEl.getAttribute('visible')) {

        document.querySelector('#photosphere-menu').setAttribute('visible', false);
        document.querySelector('#cursor').setAttribute('visible', false);

        var id = this.el.getAttribute('id');
        document.querySelector('#photosphere').setAttribute('material', {src: id.substr(0, id.length - 6)});

      }

    },

    update: function(oldData) {
    },

    remove: function() {
    }

  };

  AFRAME.aframeCore.registerComponent('isvr-photosphere-menu-thumb', isvr_photosphere_menu_thumb);

})();
