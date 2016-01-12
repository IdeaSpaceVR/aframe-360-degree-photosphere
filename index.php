<!DOCTYPE html>
<html lang="en">
<head>
  <title>360-degree photosphere</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <script src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/js/aframe.min.js"></script>
  <script src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/js/components/isvr_photosphere_menu.js"></script>
  <script src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/js/components/isvr_photosphere_menu_thumb.js"></script>

  <style>
  .view-source {
    position: absolute;
    top: 20px;
    right: 10px;
    z-index: 999999;
    background-color: rgba(102, 102, 102, 0.5);
    color: #FFF;
    margin-right: 10px;
    padding: 9px;
    font-family: Arial, sans-serif;
  }
  </style>
</head>
<body>

  <a href="" class="view-source">View source</a>

  <a-scene>
 
    <a-entity position="0 1.8 5">
      <a-entity 
      camera="far: 10000; fov: 80; near: 0.5;" 
      look-controls="enabled: true"> 
        <a-entity
        cursor="fuse: false; maxDistance: 500; timeout: 3000;"
        id="cursor" 
        position="0 0 -3.5"
        geometry="primitive: ring; radiusOuter: 0.10; radiusInner: 0.05;"
        material="color: red; shader: flat;"
        visible="false">
        </a-entity>
      </a-entity>
    </a-entity>

    <a-entity isvr-photosphere-menu id="photosphere-menu" visible="false"> 
      <a-image isvr-photosphere-menu-thumb id="#photosphere-menu-thumb-1" src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/images/010-thumb.jpg" width="2" height="1" position="0 -1.1 0">
        <a-animation attribute="position" begin="mouseenter" from="0 -1.1 0" to="0 -1.1 0.5"></a-animation>
        <a-animation attribute="position" begin="mouseleave" from="0 -1.1 0.5" to="0 -1.1 0"></a-animation>
      </a-image>
      <a-image isvr-photosphere-menu-thumb id="#photosphere-menu-thumb-2" src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/images/006-thumb.jpg" width="2" height="1" position="0 0 0">
        <a-animation attribute="position" begin="mouseenter" from="0 0 0" to="0 0 0.5"></a-animation>
        <a-animation attribute="position" begin="mouseleave" from="0 0 0.5" to="0 0 0"></a-animation>
      </a-image>
      <a-image isvr-photosphere-menu-thumb id="#photosphere-menu-thumb-3" src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/images/005-thumb.jpg" width="2" height="1" position="0 1.1 0">
        <a-animation attribute="position" begin="mouseenter" from="0 1.1 0" to="0 1.1 0.5"></a-animation>
        <a-animation attribute="position" begin="mouseleave" from="0 1.1 0.5" to="0 1.1 0"></a-animation>
      </a-image>
    </a-entity> 

    <a-sky id="photosphere" src="https://www.ideaspacevr.org/examples/aframe/aframe-360-degree-photosphere/images/005.jpg" rotation="0 -60 0" radius="5000" color="#FFFFFF"></a-sky>

  </a-scene>

</body>
</html>

