// Avoid `console` errors in browsers that lack a console.
(!window.console||!console.log)&&function(){var e=function(){},t=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","markTimeline","table","time","timeEnd","timeStamp","trace","warn"],n=t.length,r=window.console={};while(n--)r[t[n]]=e}();(function(e){function c(){n.setAttribute("content",s);o=!0}function h(){n.setAttribute("content",i);o=!1}function p(t){l=t.accelerationIncludingGravity;u=Math.abs(l.x);a=Math.abs(l.y);f=Math.abs(l.z);!e.orientation&&(u>7||(f>6&&a<8||f<8&&a>6)&&u>5)?o&&h():o||c()}if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1))return;var t=e.document;if(!t.querySelector)return;var n=t.querySelector("meta[name=viewport]"),r=n&&n.getAttribute("content"),i=r+",maximum-scale=1",s=r+",maximum-scale=10",o=!0,u,a,f,l;if(!n)return;e.addEventListener("orientationchange",c,!1);e.addEventListener("devicemotion",p,!1)})(this);(function(e){e.fn.fitVids=function(t){var n={customSelector:null},r=document.createElement("div"),i=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0];r.className="fit-vids-style";r.innerHTML="&shy;<style>               .fluid-width-video-wrapper {                 width: 100%;                              position: relative;                       padding: 0;                            }                                                                                   .fluid-width-video-wrapper iframe,        .fluid-width-video-wrapper object,        .fluid-width-video-wrapper embed {           position: absolute;                       top: 0;                                   left: 0;                                  width: 100%;                              height: 100%;                          }                                       </style>";i.parentNode.insertBefore(r,i);t&&e.extend(n,t);return this.each(function(){var t=["iframe[src*='player.vimeo.com']","iframe[src*='www.youtube.com']","iframe[src*='www.kickstarter.com']","object","embed"];n.customSelector&&t.push(n.customSelector);var r=e(this).find(t.join(","));r.each(function(){var t=e(this);if(this.tagName.toLowerCase()=="embed"&&t.parent("object").length||t.parent(".fluid-width-video-wrapper").length)return;var n=this.tagName.toLowerCase()=="object"?t.attr("height"):t.height(),r=n/t.width();if(!t.attr("id")){var i="fitvid"+Math.floor(Math.random()*999999);t.attr("id",i)}t.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",r*100+"%");t.removeAttr("height").removeAttr("width")})})}})(jQuery);$(document).ready(function(){function t(t){e.setAttribute("class",active)}$("#rss").click(function(){var e=$(this).css("top")==="0px"?"-2.75em":"0";$(this).animate({top:e},500)});$(".flex-video").fitVids();$(".evernoteSiteMemoryLink").append('<span class="evernoteSiteMemoryLinkText">Read Me Later</span>');$(".read-more").bind("mousedown mouseup",function(){$(this).toggleClass("active")});var e=document.getElementsByClassName("button");for(var n=0;n<e.length;n++)e[n].addEventListener("touchstart",t,!1);$("#article-links li").each(function(){$(this).prepend('<b class="ss-icon">&#x1F517;</b>')});$(".post-438").append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');$(".post-921").append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>');$(".post-1414").append('<a href="https://github.com/grayghostvisuals/WP-Flex"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>')});