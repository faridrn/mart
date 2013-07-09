/*
	jQuery Zoom v1.7.5 - 2013-06-19
	(c) 2013 Jack Moore - jacklmoore.com/zoom
	license: http://www.opensource.org/licenses/mit-license.php
*/
(function(o){var n={url:!1,callback:!1,target:!1,duration:120,on:"mouseover",onZoomIn:!1,onZoomOut:!1};o.zoom=function(n,t,e){var i,u,m,c,a,r=o(n).css("position");return o(n).css({position:/(absolute|fixed)/.test(r)?r:"relative",overflow:"hidden"}),e.style.width=e.style.height="",o(e).addClass("zoomImg").css({position:"absolute",top:0,left:0,opacity:0,width:e.width,height:e.height,border:"none",maxWidth:"none"}).appendTo(n),{init:function(){i=o(n).outerWidth(),u=o(n).outerHeight(),m=(e.width-i)/o(t).outerWidth(),c=(e.height-u)/o(t).outerHeight(),a=o(t).offset()},move:function(o){var n=o.pageX-a.left,t=o.pageY-a.top;t=Math.max(Math.min(t,u),0),n=Math.max(Math.min(n,i),0),e.style.left=n*-m+"px",e.style.top=t*-c+"px"}}},o.fn.zoom=function(t){return this.each(function(){var e=o.extend({},n,t||{}),i=e.target||this,u=this,m=document.createElement("img"),c=o(m),a="mousemove.zoom",r=!1;(e.url||(e.url=o(u).find("img").attr("src"),e.url))&&(m.onload=function(){function n(n){l.init(),l.move(n),c.stop().fadeTo(o.support.opacity?e.duration:0,1,o.isFunction(e.onZoomIn)?e.onZoomIn.call(m):!1)}function t(){c.stop().fadeTo(e.duration,0,o.isFunction(e.onZoomIn)?e.onZoomIn.call(m):!1)}var l=o.zoom(i,u,m);"grab"===e.on?o(u).on("mousedown.zoom",function(e){o(document).one("mouseup.zoom",function(){t(),o(document).off(a,l.move)}),n(e),o(document).on(a,l.move),e.preventDefault()}):"click"===e.on?o(u).on("click.zoom",function(e){return r?void 0:(r=!0,n(e),o(document).on(a,l.move),o(document).one("click.zoom",function(){t(),r=!1,o(document).off(a,l.move)}),!1)}):"toggle"===e.on?o(u).on("click.zoom",function(o){r?t():n(o),r=!r}):(l.init(),o(u).on("mouseenter.zoom",n).on("mouseleave.zoom",t).on(a,l.move)),o.isFunction(e.callback)&&e.callback.call(m)},m.src=e.url,o(u).one("zoom.destroy",function(){o(u).off(".zoom"),c.remove()}))})},o.fn.zoom.defaults=n})(window.jQuery);