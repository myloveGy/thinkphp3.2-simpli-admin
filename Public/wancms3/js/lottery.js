!function(a,b){b.lottery={addressUrl:"http://shop.37wan.com/lottery/index.php?action=act_send_address",historyAddress:"http://shop.37wan.com/lottery/index.php?action=get_user_history_address",secPwdUrl:"http://my.37wan.com/api/sec_login.php?action=login_check",init:function(){document.getElementById("lottery-flash-main"),this.addAddress(this.lRecord=a("#lottery-record")),this.scroll.init(a("#luckyman-list")),a(document).on("click","#lottery-trigger-clip",function(a){a.preventDefault(),alert("您的浏览器不支持该功能，麻烦手动复制^o^")})},byId:function(a){return document.getElementById(a)},dialogOptions:{title:"温馨提示",width:420,height:120},dialogCache:{},addAddress:function(a){if(a.length){var b=this;a.on("click","a[data-role='add']",function(a){a.preventDefault(),b.parseAddress(this.getAttribute("data-order"))})}},loadFlash:function(){swfobject.embedSWF("http://img1.37wanimg.com/www/swf/wheel.swf","lottery-flash-main","730","740","9.0.0","",!1,{wmode:"transparent",allowScriptAccess:"always"},{id:"flash_obj",name:"flash_obj"})},lessPoint:function(){this.parseDialog("lottery-dialog-lesspoint",{width:300,height:60,buttons:{"返回页面":function(a,b){b.hide()}}})},pwdPassword:function(){b.Secpwd.show(function(a){a.hide()})},pwdSet:function(){b.Secpwd.show(!0)},getPrize:function(a){switch(a.goods_class){case 0:this.parseDialog("lottery-dialog-unlucky",{title:"很遗憾",width:300,height:30,buttons:{"再接再厉":function(a,b){b.hide()}}});break;case 1:this.getAddress(a),this.order=a.data.ORDER_ID;break;case 2:this.parseVirtual(a);break;case 3:this.parseScore(a)}},getAddress:function(c){var d,e,f=this;e=b.loading(function(){d&&d.readyState<4&&d.abort()}),d=a.getJSON(this.historyAddress,function(a){a?a.code?f.showAddress(a.data.address_info,c):f.parseAddress(c):alert("对不起，获取地址信息时出错，请重试^o&"),e.hide()})},showAddress:function(c,d){var e=this;e.parseAddressInfo=d,this.byId("lottery-realname").innerHTML=c.REALNAME,this.byId("lottery-phone").innerHTML=c.PHONE,this.byId("lottery-address").innerHTML=c.ADDRESS,this.byId("name-address").innerHTML=d.data.LOTTERY_NAME,this.parseDialog("lottery-dialog-address",{title:"已有地址",height:160,buttons:{"使用新地址":function(a,b){e.parseAddress(e.parseAddressInfo,!0),b.hide()},"确认使用":function(d,f){f.hide();var g,h;h=b.loading(function(){g&&4>g&&g.abort()}),g=a.getJSON(e.addressUrl,{order_id:e.order,phone:c.PHONE,address:c.ADDRESS,realname:c.REALNAME},function(a){h.hide(),1===a.code?e.parseDialog("lottery-dialog-result2",{title:"确认成功",height:60,buttons:{"查看记录":"http://shop.37wan.com/lottery/history.php","返回页面":function(a,b){b.hide()}}}):alert(a.msg)})}}})},parseAddress:function(b,c){var d,e=this,f={phone:"请输入有效的联系电话，便于我们联系您收获^o^",realname:"请输入真实姓名，便于我们发货^o^",address:"请输入详细地址，确保您能收到商品^o^"};a.isPlainObject(b)?(this.byId("name-submit").innerHTML=b.data.LOTTERY_NAME,this.byId("order-submit").innerHTML=b.data.ORDER_ID,e.orderID=b.data.ORDER_ID):"string"==typeof b&&(e.orderID=b,this.byId("order-submit").innerHTML=b),d={"确认提交":function(b,c){var d={},g=c.el.find(".sq-dialog-text, select"),h=[],i=!0;g.each(function(){var a=this.value;if(!a)return alert(f["select"!==this.nodeName.toLowerCase()?this.name:"address"]),i=!0,!1;if("realname"===this.name||"phone"===this.name){if("realname"===this.name&&!/^[\u4e00-\u9fa5]+$/.test(a))return alert(f.realname),i=!0,!1;if("phone"===this.name&&!/(^((0[1,2]{1}\d{1}-?\d{8})|(0[3-9]{1}\d{2}-?\d{7,8}))$)|(^0?(13[0-9]|15[0-35-9]|18[012356789]|14[57])[0-9]{8}$)/.test(a))return alert(f.phone),i=!0,!1;d[this.name]=a}else h.push("select"!==this.nodeName.toLowerCase()?this.value:this.options[this.selectedIndex].innerHTML);i=!1}),i||(d.order_id=e.orderID,d.address=h.join(" "),a.getJSON(e.addressUrl,d,function(a){1===a.code?(c.hide(),e.submitSuccess()):alert(a.msg)}))},"返回页面":function(a,b){b.hide()}},c&&(delete d["返回页面"],d["使用原地址"]=function(a,b){b.hide(),e.parseDialog("lottery-dialog-address")}),e.parseDialog("lottery-dialog-submitaddr",{height:230,buttons:d})},submitSuccess:function(){var a={"查看记录":"http://shop.37wan.com/lottery/history.php","返回页面":function(a,b){b.hide()}};this.lRecord.length&&(a={"返回页面":function(){location.reload()}}),this.parseDialog("lottery-dialog-result",{title:"提交成功",height:60,buttons:a})},parseVirtual:function(c){var d=this;d.parseDialog("lottery-dialog-virtual",{height:90,buttons:{"返回页面":function(a,b){b.hide()},"查看记录":"http://shop.37wan.com/lottery/history.php"}}),this.virtualName||(this.virtualName=a("#name-virtual"),this.cardInput=a("#lottery-card"),this.cardClip=a("#lottery-trigger-clip")),this.virtualName.text(c.data.LOTTERY_NAME),this.cardInput.val(c.data.CARD||""),this.cardClip.attr("data-clipboard-text",c.data.CARD||""),b.clip(this.cardClip[0])},parseScore:function(b){var c=this;c.parseDialog("lottery-dialog-score",{height:40,buttons:{"返回页面":function(a,b){b.hide()},"查看积分":"http://my.37wan.com/user/point.php"}}),this.scoreName||(this.scoreName=a("#name-score")),this.scoreName.text(b.data.LOTTERY_NAME)},parseDialog:function(c,d){return this.dialogCache[c]?this.dialogCache[c].show():(this.dialogCache[c]=new b.Dialog(a.extend(!0,{},this.dialogOptions,{content:a("#"+c)},d)),"lottery-dialog-submitaddr"===c&&(this.addressObj=new b.Address({city:{selector:"#lo-s2",width:85,zIndex:1002},province:{selector:"#lo-s1",width:85,zIndex:1002},district:{selector:"#lo-s3",width:85,zIndex:1002}}))),this.dialogCache[c]},notVip:function(){this.notVipDialog?this.notVipDialog.show():this.notVipDialog=new b.Dialog({width:400,height:60,title:"温馨提示",content:"<p>不好意思，vip 用户才能抽这些奖。</p><p>您可以通过做任务累计积分来升级到 vip。</p>",buttons:{"去做任务":"http://shop.37wan.com/task/","返回页面":function(a,b){b.hide()}}})},scroll:{init:function(a){a.length&&(this.ul=a.find("ul"),this.space=a.find("li:first").outerHeight(!0),this.start())},start:function(){var a=this;this.ul.animate({marginTop:-this.space},2e3,function(){a.ul.find("li:first").appendTo(a.ul),a.ul.css("marginTop",0),a.start()})}},showAlert:function(a,c,d){a=a||"温馨提示",c=c||"系统繁忙，请稍后再试^o^",d=d||null,b.alert(c,d,a)}},b.lottery.init()}(jQuery,SQ);