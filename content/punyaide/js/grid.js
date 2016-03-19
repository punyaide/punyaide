var $event=$.event,$special,resizeTimeout;$special=$event.special.debouncedresize={setup:function(){$(this).on("resize",$special.handler)},teardown:function(){$(this).off("resize",$special.handler)},handler:function(e,t){var n=this,r=arguments,i=function(){e.type="debouncedresize";$event.dispatch.apply(n,r)};if(resizeTimeout){clearTimeout(resizeTimeout)}t?i():resizeTimeout=setTimeout(i,$special.threshold)},threshold:250};var BLANK="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";$.fn.imagesLoaded=function(e){function a(){var r=$(o),s=$(u);if(n){if(u.length){n.reject(i,r,s)}else{n.resolve(i)}}if($.isFunction(e)){e.call(t,i,r,s)}}function f(e,t){if(e.src===BLANK||$.inArray(e,s)!==-1){return}s.push(e);if(t){u.push(e)}else{o.push(e)}$.data(e,"imagesLoaded",{isBroken:t,src:e.src});if(r){n.notifyWith($(e),[t,i,$(o),$(u)])}if(i.length===s.length){setTimeout(a);i.unbind(".imagesLoaded")}}var t=this,n=$.isFunction($.Deferred)?$.Deferred():0,r=$.isFunction(n.notify),i=t.find("img").add(t.filter("img")),s=[],o=[],u=[];if($.isPlainObject(e)){$.each(e,function(t,r){if(t==="callback"){e=r}else if(n){n[t](r)}})}if(!i.length){a()}else{i.bind("load.imagesLoaded error.imagesLoaded",function(e){f(e.target,e.type==="error")}).each(function(e,t){var n=t.src;var r=$.data(t,"imagesLoaded");if(r&&r.src===n){f(t,r.isBroken);return}if(t.complete&&t.naturalWidth!==undefined){f(t,t.naturalWidth===0||t.naturalHeight===0);return}if(t.readyState||t.complete){t.src=BLANK;t.src=n}})}return n?n.promise(t):t};var Grid=function(){function p(t){h=$.extend(true,{},h,t);e.imagesLoaded(function(){v(true);y();m()})}function d(e){t=t.add(e);e.each(function(){var e=$(this);e.data({offsetTop:e.offset().top,height:e.height()})});g(e)}function v(e){t.each(function(){var t=$(this);t.data("offsetTop",t.offset().top);if(e){t.data("height",t.height())}})}function m(){g(t);o.on("debouncedresize",function(){i=0;r=-1;v();y();var e=$.data(this,"preview");if(typeof e!="undefined"){w()}})}function g(e){e.on("click","span.og-close",function(){w();return false}).children("a").on("click",function(e){var t=$(this).parent();n===t.index()?w():b(t);return false})}function y(){u={width:o.width(),height:o.height()}}function b(e){var t=$.data(this,"preview"),n=e.data("offsetTop");i=0;if(typeof t!="undefined"){if(r!==n){if(n>r){i=t.height}w()}else{t.update(e);return false}}r=n;t=$.data(this,"preview",new E(e));t.open()}function w(){n=-1;var e=$.data(this,"preview");e.close();$.removeData(this,"preview")}function E(e){this.$item=e;this.expandedIdx=this.$item.index();this.create();this.update()}var e=$("#og-grid"),t=e.children("li"),n=-1,r=-1,i=0,s=10,o=$(window),u,a=$("html, body"),f={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},l=f[Modernizr.prefixed("transition")],c=Modernizr.csstransitions,h={minHeight:500,speed:350,easing:"ease"};E.prototype={create:function(){this.$title=$("<h3></h3>");this.$description=$("<p></p>");this.$href=$('<a href="#">View Details</a>');this.$details=$('<div class="og-details"></div>').append(this.$title,this.$description,this.$href);this.$loading=$('<div class="og-loading"></div>');this.$fullimage=$('<div class="og-fullimg"></div>').append(this.$loading);this.$closePreview=$('<span class="og-close"></span>');this.$previewInner=$('<div class="og-expander-inner"></div>').append(this.$closePreview,this.$fullimage,this.$details);this.$previewEl=$('<div class="og-expander"></div>').append(this.$previewInner);this.$item.append(this.getEl());if(c){this.setTransition()}},update:function(e){if(e){this.$item=e}if(n!==-1){var r=t.eq(n);r.removeClass("og-expanded");this.$item.addClass("og-expanded");this.positionPreview()}n=this.$item.index();var i=this.$item.children("a"),s={href:i.attr("href"),largesrc:i.data("largesrc"),title:i.data("title"),description:i.data("description")};this.$title.html(s.title);this.$description.html(s.description);this.$href.attr("href",s.href);var o=this;if(typeof o.$largeImg!="undefined"){o.$largeImg.remove()}if(o.$fullimage.is(":visible")){this.$loading.show();$("<img/>").load(function(){var e=$(this);if(e.attr("src")===o.$item.children("a").data("largesrc")){o.$loading.hide();o.$fullimage.find("img").remove();o.$largeImg=e.fadeIn(350);o.$fullimage.append(o.$largeImg)}}).attr("src",s.largesrc)}},open:function(){setTimeout($.proxy(function(){this.setHeights();this.positionPreview()},this),25)},close:function(){var e=this,n=function(){if(c){$(this).off(l)}e.$item.removeClass("og-expanded");e.$previewEl.remove()};setTimeout($.proxy(function(){if(typeof this.$largeImg!=="undefined"){this.$largeImg.fadeOut("fast")}this.$previewEl.css("height",0);var e=t.eq(this.expandedIdx);e.css("height",e.data("height")).on(l,n);if(!c){n.call()}},this),25);return false},calcHeight:function(){var e=u.height-this.$item.data("height")-s,t=u.height;if(e<h.minHeight){e=h.minHeight;t=h.minHeight+this.$item.data("height")+s}this.height=e;this.itemHeight=t},setHeights:function(){var e=this,t=function(){if(c){e.$item.off(l)}e.$item.addClass("og-expanded")};this.calcHeight();this.$previewEl.css("height",this.height);this.$item.css("height",this.itemHeight).on(l,t);if(!c){t.call()}},positionPreview:function(){var e=this.$item.data("offsetTop"),t=this.$previewEl.offset().top-i,n=this.height+this.$item.data("height")+s<=u.height?e:this.height<u.height?t-(u.height-this.height):t;a.animate({scrollTop:n},h.speed)},setTransition:function(){this.$previewEl.css("transition","height "+h.speed+"ms "+h.easing);this.$item.css("transition","height "+h.speed+"ms "+h.easing)},getEl:function(){return this.$previewEl}};return{init:p,addItems:d}}()