(function(){var t,i;t=this.jQuery||window.jQuery,i=t(window),t.fn.stick_in_parent=function(s){var o,n,e,r,c,a,f,u,l,g,k,p,d,h,y,v,m,b,_,w;for(null==s&&(s={}),p=s.sticky_class,a=s.inner_scrolling,k=s.recalc_every,g=s.parent,l=s.offset_top,u=s.spacer,e=s.bottoming,d=void 0!==s.transition_offset&&parseFloat(s.transition_offset),h=void 0!==s.observer&&s.observer,y=void 0!==s.scroll_transition&&parseFloat(s.scroll_transition),v=void 0!==s.clone&&s.clone,m=!1,null==l&&(l=0),"fusion-container-stuck"===p&&"object"==typeof fusion&&"function"==typeof fusion.getHeight&&(l=fusion.getHeight(l)+jQuery("#wpadminbar").height()),null==g&&(g=void 0),null==a&&(a=!0),null==p&&(p="is_stuck"),o=t(document),null==e&&(e=!0),r=function(n,r,c,f,C,x,j,Q){var I,H,z,A,M,O,T,F,G,S,W,D,q;if(!n.data("sticky_kit")){if(n.attr("data-sticky_kit",!0),M=o.height(),T=n.parent(),null!=g&&(T=T.closest(g)),!T.length)throw"failed to find stick parent";if(z=!1,I=!1,null!=u?W=u&&n.closest(u):v?(W=n.clone(!1)).addClass("fusion-sticky-spacer").removeClass("fusion-sticky-transition"):W=jQuery('<div class="fusion-sticky-spacer" />'),W&&W.css("position",n.css("position")),overlap=function(t,i){"object"==typeof t&&"object"==typeof t[0]&&(t[0].isIntersecting?n.removeClass("fusion-sticky-transition"):n.addClass("fusion-sticky-transition"))},h&&(q=new IntersectionObserver(overlap,{rootMargin:"0px",threshold:1})),(F=function(){var t,i,s,e;if(!Q)return M=o.height(),t=parseInt(T.css("border-top-width"),10),i=parseInt(T.css("padding-top"),10),r=parseInt(T.css("padding-bottom"),10),c=T.offset().top+t+i,f=T.height(),z&&(z=!1,I=!1,null==u&&(n.next(".fusion-sticky-spacer").length?W=n.next(".fusion-sticky-spacer"):n.insertAfter(W)),n.css({position:"",top:"",width:"",bottom:""}).removeClass(p),s=!0),C=n.offset().top-(parseInt(n.css("margin-top"),10)||0)-l,x=n.outerHeight(!0),j=n.css("float"),W&&(e={width:n.outerWidth(!0),display:n.css("display"),"vertical-align":n.css("vertical-align"),float:j},v||(e.height=x),W.css(e)),s?D():void 0})(),x!==f){if(A=void 0,O=l,S=k,D=function(){var t,s,g,v,m,b;if(!Q)return g=!1,null!=S&&0>=(S-=1)&&(S=k,F(),g=!0),null==S||g||o.height()===M||(F(),g=!0),v=i.scrollTop(),null!=A&&(s=v-A),A=v,z?(e&&(m=v+x+O>f+c,I&&!m&&(I=!1,n.css({position:"fixed",bottom:"",top:O}).trigger("sticky_kit:unbottom"))),v<C&&(z=!1,O=l,null==u&&("left"!==j&&"right"!==j||n.insertAfter(W),W&&W.detach()),t={position:"",width:"",top:""},n.css(t).removeClass(p).trigger("sticky_kit:unstick"),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-change")),a&&(b=i.height(),x+l>b&&(I||(O-=s,O=Math.max(b-x,O),O=Math.min(l,O),z&&n.css({top:O+"px"}))))):v>C&&(z=!0,(t={position:"fixed",top:O}).width="border-box"===n.css("box-sizing")?n.outerWidth()+"px":n.width()+"px",n.css(t).addClass(p),null==u&&(n.after(W),"left"!==j&&"right"!==j||W.append(n)),n.trigger("sticky_kit:stick"),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-change")),!1===d||h||(!n.is(".fusion-sticky-transition")&&v-C>d?(n.addClass("fusion-sticky-transition"),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-transition-change")):n.is(".fusion-sticky-transition")&&v-C<=d&&(n.removeClass("fusion-sticky-transition"),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-transition-change"))),!1!==y&&0!==y&&(0>s?n.hasClass("fusion-scrolling-up")||(n.addClass("fusion-scrolling-up").removeClass("fusion-scrolling-down"),i.trigger("fusion-sticky-scroll-change")):n.hasClass("fusion-scrolling-down")||(n.addClass("fusion-scrolling-down").removeClass("fusion-scrolling-up"),i.trigger("fusion-sticky-scroll-change")),!n.is(".fusion-sticky-scroll-transition")&&v-C>y?(n.addClass("fusion-sticky-scroll-transition"),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-scroll-change")):n.is(".fusion-sticky-scroll-transition")&&v-C<=y&&(n.removeClass("fusion-sticky-scroll-transition"),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-scroll-change"))),z&&e&&(null==m&&(m=v+x+O>f+c),!I&&m)?(I=!0,"static"===T.css("position")&&T.css({position:"relative"}),n.css({position:"absolute",bottom:r,top:"auto"}).trigger("sticky_kit:bottom")):void 0},G=function(){return F(),D()},_=function(t){var i;"object"==typeof fusion&&"function"==typeof fusion.getHeight&&(l=void 0===s.offset_top?0:s.offset_top,"fusion-container-stuck"===p?l=fusion.getHeight(l)+jQuery("#wpadminbar").height():"fusion-sidebar-stuck"===p&&jQuery(".fusion-tb-header").length&&"function"==typeof fusionGetStickyOffset&&(i=fusionGetStickyOffset())&&(l=i+jQuery("#wpadminbar").height()+50),O=l),G(),void 0!==t&&"string"==typeof t.type&&"resize"===t.type&&"function"==typeof B&&B()},"object"==typeof fusion&&"function"==typeof fusion.debounce)var B=fusion.debounce(_,350);return w=function(t){m||(m=!0,_(t),B(),setTimeout(function(){m=!1},100))},b=function(){h&&q.observe(n.next()[0])},H=function(){if(Q=!0,i.off("touchmove",D),i.off("scroll",D),i.off("resize",_),t(document.body).off("sticky_kit:recalc",G),"fusion-container-stuck"===p&&i.trigger("fusion-sticky-change"),n.off("sticky_kit:detach",H),n.removeData("sticky_kit"),n.removeAttr("data-sticky_kit"),n.css({position:"",bottom:"",top:"",width:""}),n.removeClass("fusion-sticky-transition"),T.position("position",""),z)return null==u&&("left"!==j&&"right"!==j||n.insertAfter(W),W.remove()),n.removeClass(p);n.next(".fusion-sticky-spacer").length&&n.next(".fusion-sticky-spacer").remove()},W&&W.detach(),"fusion-sidebar-stuck"===p&&jQuery(".fusion-tb-header").length&&i.on("fusion-sticky-change fusion-sticky-scroll-change fusion-sticky-transition-change",w),i.on("touchmove",D),i.on("scroll",D),i.on("resize",_),t(document.body).on("sticky_kit:recalc",G),n.on("sticky_kit:detach",H),n.on("sticky_kit:stick",b),setTimeout(D,0)}}},c=0,f=this.length;c<f;c++)n=this[c],r(t(n));return this}}).call(this);