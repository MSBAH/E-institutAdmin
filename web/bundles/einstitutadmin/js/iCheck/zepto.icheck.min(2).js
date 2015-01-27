/*!
 * iCheck v0.9.1 Zepto plugin, http://git.io/uhUPMA
 */
(function(g){function C(a,b,d){var c=a[0],e=/er/.test(d)?k:/bl/.test(d)?u:j;active=d==E?{checked:c[j],disabled:c[u],indeterminate:"true"==a.attr(k)||"false"==a.attr(v)}:c[e];if(/^(ch|di|in)/.test(d)&&!active)p(a,e);else if(/^(un|en|de)/.test(d)&&active)w(a,e);else if(d==E)for(var e in active)active[e]?p(a,e,!0):w(a,e,!0);else if(!b||"toggle"==d){if(!b)a[r]("ifClicked");active?c[l]!==x&&w(a,e):p(a,e)}}function p(a,b,d){var c=a[0],e=a.parent(),f=b==j,H=b==k,m=H?v:f?I:"enabled",r=h(a,m+y(c[l])),L=h(a,
b+y(c[l]));if(!0!==c[b]){if(!d&&b==j&&c[l]==x&&c.name){var p=a.closest("form"),s='input[name="'+c.name+'"]',s=p.length?p.find(s):g(s);s.each(function(){this!==c&&g(this).data(n)&&w(g(this),b)})}H?(c[b]=!0,c[j]&&w(a,j,"force")):(d||(c[b]=!0),f&&c[k]&&w(a,k,!1));J(a,f,b,d)}c[u]&&h(a,z,!0)&&e.find("."+F).css(z,"default");e[t](L||h(a,b)||"");e[A](r||h(a,m)||"")}function w(a,b,d){var c=a[0],e=a.parent(),f=b==j,g=b==k,m=g?v:f?I:"enabled",n=h(a,m+y(c[l])),p=h(a,b+y(c[l]));if(!1!==c[b]){if(g||!d||"force"==
d)c[b]=!1;J(a,f,m,d)}!c[u]&&h(a,z,!0)&&e.find("."+F).css(z,"pointer");e[A](p||h(a,b)||"");e[t](n||h(a,m)||"")}function K(a,b){if(a.data(n)){a.parent().html(a.attr("style",a.data(n).s||""));if(b)a[r](b);a.off(".i").unwrap();g(D+'[for="'+a[0].id+'"]').add(a.closest(D)).off(".i")}}function h(a,b,d){if(a.data(n))return a.data(n).o[b+(d?"":"Class")]}function y(a){return a.charAt(0).toUpperCase()+a.slice(1)}function J(a,b,d,c){if(!c){if(b)a[r]("ifToggled");a[r]("ifChanged")[r]("if"+y(d))}}var n="iCheck",
F=n+"-helper",x="radio",j="checked",I="un"+j,u="disabled",v="determinate",k="in"+v,E="update",l="type",t="addClass",A="removeClass",r="trigger",D="label",z="cursor",G=/ipad|iphone|ipod|android|blackberry|windows phone|opera mini/i.test(navigator.userAgent);g.fn[n]=function(a,b){var d='input[type="checkbox"], input[type="'+x+'"]',c=g(),e=function(a){a.each(function(){var a=g(this);c=a.is(d)?c.add(a):c.add(a.find(d))})};if(/^(check|uncheck|toggle|indeterminate|determinate|disable|enable|update|destroy)$/i.test(a))return a=
a.toLowerCase(),e(this),c.each(function(){var c=g(this);"destroy"==a?K(c,"ifDestroyed"):C(c,!0,a);g.isFunction(b)&&b()});if("object"==typeof a||!a){var f=g.extend({checkedClass:j,disabledClass:u,indeterminateClass:k,labelHover:!0},a),h=f.handle,m=f.hoverClass||"hover",y=f.focusClass||"focus",v=f.activeClass||"active",z=!!f.labelHover,s=f.labelHoverClass||"hover",B=(""+f.increaseArea).replace("%","")|0;if("checkbox"==h||h==x)d='input[type="'+h+'"]';-50>B&&(B=-50);e(this);return c.each(function(){var a=
g(this);K(a);var c=this,b=c.id,d=-B+"%",e=100+2*B+"%",e={position:"absolute",top:d,left:d,display:"block",width:e,height:e,margin:0,padding:0,background:"#fff",border:0,opacity:0},d=G?{position:"absolute",visibility:"hidden"}:B?e:{position:"absolute",opacity:0},h="checkbox"==c[l]?f.checkboxClass||"icheckbox":f.radioClass||"i"+x,k=g(D+'[for="'+b+'"]').add(a.closest(D)),q=a.wrap('<div class="'+h+'"/>')[r]("ifCreated").parent().append(f.insert),e=g('<ins class="'+F+'"/>').css(e).appendTo(q);a.data(n,
{o:f,s:a.attr("style")}).css(d);f.inheritClass&&q[t](c.className||"");f.inheritID&&b&&q.attr("id",n+"-"+b);"static"==q.css("position")&&q.css("position","relative");C(a,!0,E);if(k.length)k.on("click.i mouseover.i mouseout.i touchbegin.i touchend.i",function(b){var d=b[l],e=g(this);if(!c[u])if("click"==d?C(a,!1,!0):z&&(/ut|nd/.test(d)?(q[A](m),e[A](s)):(q[t](m),e[t](s))),G)b.stopPropagation();else return!1});a.on("click.i focus.i blur.i keyup.i keydown.i keypress.i",function(b){var d=b[l];b=b.keyCode;
if("click"==d)return!1;if("keydown"==d&&32==b)return c[l]==x&&c[j]||(c[j]?w(a,j):p(a,j)),!1;if("keyup"==d&&c[l]==x)!c[j]&&p(a,j);else if(/us|ur/.test(d))q["blur"==d?A:t](y)});e.on("click mousedown mouseup mouseover mouseout touchbegin.i touchend.i",function(b){var d=b[l],e=/wn|up/.test(d)?v:m;if(!c[u]){if("click"==d)C(a,!1,!0);else{if(/wn|er|in/.test(d))q[t](e);else q[A](e+" "+v);if(k.length&&z&&e==m)k[/ut|nd/.test(d)?A:t](s)}if(G)b.stopPropagation();else return!1}})})}return this}})(Zepto);