/*
    Portfolio
    Version: 1.1.2
    Release date: Tue May 12 2020

    https://elfsight.com

    Copyright (c) 2020 Elfsight, LLC. ALL RIGHTS RESERVED
*/

!function(wp,$){"use strict";let IconBlock=function(e){return wp.element.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20",class:"dashicon"},[wp.element.createElement("path",{d:"M12.494 11.068h-4.94v.996a1.017 1.017 0 0 1-2.033 0v-.996H1.818V16.3c0 .497.407.9.91.9h14.545a.905.905 0 0 0 .909-.9v-9c0-.497-.407-.9-.91-.9H2.728a.905.905 0 0 0-.909.9v2.042H16.28a.863.863 0 1 1 0 1.726h-1.752v.996a1.017 1.017 0 1 1-2.034 0v-.996zM5.454 4.6v-.9c0-1.491 1.222-2.7 2.728-2.7h3.636c1.506 0 2.727 1.209 2.727 2.7v.9h2.728C18.779 4.6 20 5.809 20 7.3v9c0 1.491-1.221 2.7-2.727 2.7H2.727C1.221 19 0 17.791 0 16.3v-9c0-1.491 1.221-2.7 2.727-2.7h2.728zm1.819 0h5.454v-.9c0-.497-.407-.9-.909-.9H8.182a.905.905 0 0 0-.91.9v.9z"})])};if(void 0===wp.components||void 0===wp.blocks||void 0===wp.element||void 0===wp.i18n)return!1;const{Component:Component}=window.React,{__:__}=wp.i18n,el=wp.element.createElement,registerBlockType=wp.blocks.registerBlockType,ServerSideRender=wp.components.ServerSideRender,restApiUrl=window.wpApiSettings.root+"/elfsight-portfolio/admin",restApiNonce=window.wpApiSettings.nonce;let initTimeout;function initWidget(){clearTimeout(initTimeout),initTimeout=setTimeout(function(){const widgets=document.querySelectorAll("[data-elfsight-portfolio-options]");Array.prototype.slice.call(widgets).forEach(function(widget){const options=widget.getAttribute("data-elfsight-portfolio-options"),data=JSON.parse(decodeURIComponent(options));eval("eappsPortfolio(widget, data)"),widget.removeAttribute("data-elfsight-portfolio-options"),widget.removeAttribute("data-elfsight-portfolio-version"),widget.closest(".elfsight-block-widget-container").classList.add("elfsight-block-widget-initialized")})},1500)}async function getWidgets(){const e=await $.ajax({type:"GET",url:restApiUrl+"/widgets/list/",beforeSend:function(e){e.setRequestHeader("X-WP-Nonce",restApiNonce)}});return e.status?[e.data,e.data.reduce(function(e,t){return e[t.id]=t,e},{})]:[]}function getWidgetId(e){let t;return e.some(function(e){return"1"===e.active&&(t=parseInt(e.id),!0)}),t}class Widget extends Component{componentDidMount(){initWidget()}componentDidUpdate(){initWidget()}render(){const{id:e}=this.props;return e?el("div",{className:"elfsight-block-widget-container"},el(ServerSideRender,{block:"elfsight-portfolio/block",attributes:{id:e}}),el("div",{className:"elfsight-block-widget-placeholder"},el(IconBlock,{}),el("span",{},"Portfolio"))):null}}class Button extends Component{render(){const{href:e,className:t,text:i}=this.props,o=document.location.origin+document.location.pathname.replace("post.php","admin.php")+"?page=elfsight-portfolio#";return el("a",{href:o+e,target:"_blank",className:t},i)}}class WidgetSelect extends Component{constructor(){super(),this.state={widgets:[]}}setWidget(e){e.preventDefault();const{setAttributes:t}=this.props,i=e.target.querySelector("option:checked");t({id:parseInt(i.value)})}componentDidMount(){const{id:e,setAttributes:t}=this.props;getWidgets().then(i=>{const[o,s]=i;this.setState({widgets:o});const n=!(!s[e]||"1"!==s[e].active);t(!n&&s?{id:getWidgetId(o),exist:!0}:{id:e,exist:n})})}render(){const{widgets:e}=this.state,{id:t}=this.props;return e.length>0?el("div",{className:"components-base-control"},el("div",{className:"components-base-control__field"},el("select",{className:"components-select-control__input",id:"elfsight-portfolio-block-control-id",value:t,onChange:this.setWidget.bind(this)},e.map(({id:e,name:t})=>el("option",{value:e},t))))):null}}registerBlockType("elfsight-portfolio/block",{title:"Portfolio",description:"Show your works and projects in details and attract new clients.",icon:{src:IconBlock},category:"widgets",keywords:["Portfolio","Elfsight"],supports:{html:!1},attributes:{id:{type:"number"},exist:{type:"bool",default:!1}},edit:function(e){const{attributes:{id:t,exist:i},setAttributes:o}=e;return getWidgets().then(e=>{const[s,n]=e;o(!i&&s?{id:getWidgetId(s),exist:!0}:{id:t,exist:i})}),el(wp.element.Fragment,{},el(wp.editor.InspectorControls,{},el(wp.components.PanelBody,{className:"elfsight-block-panel",title:"Select widget"},el(WidgetSelect,{id:t,setAttributes:function(t){e.setAttributes(t)}}),i?el("div",{className:"elfsight-block-panel-group"},el(Button,{href:"/edit-widget/"+t,className:"components-button is-button is-default is-large elfsight-block-panel-button",text:__("Edit Widget")}),el(Button,{href:"/add-widget/",className:"elfsight-block-panel-link",text:__("Create new widget")})):el("div",{className:"elfsight-block-panel-group"},el("span",{},__("No widgets yet")),el(Button,{href:"/add-widget/",className:"components-button is-button is-default is-primary is-large elfsight-block-panel-button",text:__("Create Widget")})))),i?el(Widget,{id:t,exist:i}):null,i?null:el("div",{className:"elfsight-block-form"},el("div",{className:"elfsight-block-form-header"},el(IconBlock,{}),el("span",{},"Portfolio")),el("div",{className:"elfsight-block-form-text"},__("Show your works and projects in details and attract new clients."),el("br"),el("strong",{},__("Let's create your first widget!"))),el(Button,{href:"/add-widget/",className:"components-button is-button is-default is-primary is-large elfsight-block-form-button",text:__("Create Widget")})))},save:function(){return null}})}(wp,jQuery);