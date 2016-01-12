(function() {

  var isvr_photosphere_menu_thumb = {

    init: function() {
      
      this.el.addEventListener('click', this.onClick.bind(this));
      this.el.addEventListener('touchstart', this.onClick.bind(this));

    },

    onClick: function() {

      document.querySelector('#photosphere-menu').setAttribute('visible', false);  
      document.querySelector('#cursor').setAttribute('visible', false);

      var src = this.el.getAttribute('src');
      document.querySelector('#photosphere').setAttribute('src', src.substr(0, src.length - 10) + '.jpg');      

    },

    update: function(oldData) {
    },

    remove: function() {
    }

  };

  AFRAME.aframeCore.registerComponent('isvr-photosphere-menu-thumb', isvr_photosphere_menu_thumb);

})();


