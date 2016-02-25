(function() {

  var isvr_photosphere_menu_thumb = {

    init: function() {

      this.el.addEventListener('click', this.onClick.bind(this));
      
    },

    onClick: function(evt) {

      var position = this.el.getAttribute('position');

      /* prevent immediate selection of image after menu appears */
      if (this.el.parentEl.getAttribute('visible') && position.z == 0.5) {
      
        var id = this.el.getAttribute('id');
        id = '#' + id.substr(0, id.length - 6);

        /* keep menu if material is the same */
        if (document.querySelector('#photosphere').getAttribute('material').src != id) {

          document.querySelector('#photosphere-menu').setAttribute('visible', false);
          document.querySelector('#cursor').setAttribute('visible', false);
          document.querySelector('#photosphere').setAttribute('material', {src: id});

        }
      }

    },

    update: function(oldData) {
    },

    remove: function() {
    }

  };

  AFRAME.aframeCore.registerComponent('isvr-photosphere-menu-thumb', isvr_photosphere_menu_thumb);

})();
