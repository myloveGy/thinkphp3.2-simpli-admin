<?php
/**
 * Created by PhpStorm.
 * User: liujinxing
 * Date: 2016/7/21
 * Time: 18:33
 */
?>
<div>
    <div class="user-profile row" id="user-profile-1">
        <div class="col-xs-12 col-sm-3 center">
            <div>
				<span class="profile-picture">
					<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="/public/assets/avatars/avatar.jpg" />
				</span>
                <div class="space-4"></div>
                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                    <div class="inline position-relative">
                        <a data-toggle="dropdown" class="user-title-label dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-circle light-green"></i>
                            &nbsp;
                            <span class="white"><?=$user->username?></span>
                        </a>
                        <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                            <li class="dropdown-header"> 切换状态 </li>
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle green"></i>&nbsp;
                                    <span class="green"> 启用 </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle red"></i>&nbsp;
                                    <span class="red"> 正在审核 </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-circle grey"></i>&nbsp;
                                    <span class="grey"> 停用 </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-6"></div>
            <div class="hr hr16 dotted"></div>
        </div>

        <div class="col-xs-12 col-sm-9">


            <!-- #section:pages/profile.info -->
            <div class="profile-user-info profile-user-info-striped">
                <div class="profile-info-row">
                    <div class="profile-info-name"> 用户名 </div>

                    <div class="profile-info-value">
                        <span id="username" class="editable editable-click"><?=$user->username?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 国籍 </div>

                    <div class="profile-info-value">
                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                        <span id="country" class="editable editable-click">中国</span>
                        <span id="city" class="editable editable-click">上海</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 年龄 </div>

                    <div class="profile-info-value">
                        <span id="age" class="editable editable-click">永远18</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 添加时间 </div>

                    <div class="profile-info-value">
                        <span id="signup" class="editable editable-click"><?=date('Y-m-d H:i:s', $user->create_time)?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 上一次登录时间 </div>

                    <div class="profile-info-value">
                        <span id="login" class="editable editable-click"><?=date('Y-m-d H:i:s', $user->update_time)?></span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> 座右铭 </div>

                    <div class="profile-info-value">
                        <span id="about" class="editable editable-click">学会微笑,学会面对,学会放下,让一切随心、随意、随心</span>
                    </div>
                </div>
            </div>

            <!-- /section:pages/profile.info -->
            <div class="space-20"></div>

            <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title blue smaller">
                        <i class="ace-icon fa fa-rss orange"></i>
                        最近活动
                    </h4>

                    <div class="widget-toolbar action-buttons">
                        <a data-action="reload" href="#">
                            <i class="ace-icon fa fa-refresh blue"></i>
                        </a>&nbsp;
                        <a class="pink" href="#">
                            <i class="ace-icon fa fa-trash-o"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main padding-8">
                        <div id="profile-feed-1" class="profile-feed">
                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Alex Doe's avatar" src="/public/assets/avatars/avatar5.png" />
                                    <a class="user" href="#"> Alex Doe </a>
                                    changed his profile photo.
                                    <a href="#">Take a look</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        an hour ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Susan Smith's avatar" src="/public/assets/avatars/avatar1.png" />
                                    <a class="user" href="#"> Susan Smith </a>

                                    is now friends with Alex Doe.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        2 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    joined
                                    <a href="#">Country Music</a>

                                    group.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        5 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    uploaded a new photo.
                                    <a href="#">Take a look</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        5 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="David Palms's avatar" src="/static/assets/avatars/avatar4.png" />
                                    <a class="user" href="#"> David Palms </a>

                                    left a comment on Alex's wall.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        8 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    published a new blog post.
                                    <a href="#">Read now</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        11 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Alex Doe's avatar" src="/static/assets/avatars/avatar5.png" />
                                    <a class="user" href="#"> Alex Doe </a>

                                    upgraded his skills.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        12 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged in.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        12 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged out.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        16 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged in.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        16 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr hr2 hr-double"></div>
            <div class="space-6"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        // 单个修改表单信息
        $.fn.editable.defaults.mode = 'inline';
        $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
        $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
            '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';
        $.fn.editable.defaults.ajaxOptions = {type: "POST", dataType:'json'};

        // 公共的方法用来处理编辑的信息
        function EditError() {
            $.gritter.add({
                title: '编辑出现错误!',
                text: '服务器没有响应',
                class_name: 'gritter-error gritter-center',
                time: 800,
            });
        }


        // 修改用户名
        $('#username').editable({
            type: 'text',
            name: 'username',
            url:  '/admin/update',
            send: "always",
            ajaxOptions:{type: "POST", dataType:'json'},
            success:function(response, newValue) {
                if (response.status == 1) return true;
                layer.msg(response.msg, {icon: 5, time:1000});
                return false;
            },
            error:EditError,
        });

        // 城市和地区联动
        var countries = [];
        $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
            countries.push({id: k, text: v});
        });

        var cities = [];
        cities["CA"] = [];
        $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
            cities["CA"].push({id: v, text: v});
        });
        cities["IN"] = [];
        $.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
            cities["IN"].push({id: v, text: v});
        });
        cities["NL"] = [];
        $.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
            cities["NL"].push({id: v, text: v});
        });
        cities["TR"] = [];
        $.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
            cities["TR"].push({id: v, text: v});
        });
        cities["US"] = [];
        $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
            cities["US"].push({id: v, text: v});
        });

        var currentValue = "NL";
        $('#country').editable({
            type: 'select2',
            value : 'NL',
            //onblur:'ignore',
            source: countries,
            select2: {
                'width': 140
            },
            success: function(response, newValue) {
                if(currentValue == newValue) return;
                currentValue = newValue;

                var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                //the destroy method is causing errors in x-editable v1.4.6+
                //it worked fine in v1.4.5
                /**
                 $('#city').editable('destroy').editable({
				type: 'select2',
				source: new_source
			}).editable('setValue', null);
                 */

                //so we remove it altogether and create a new element
                var city = $('#city').removeAttr('id').get(0);
                $(city).clone().attr('id', 'city').text('Select City').editable({
                    type: 'select2',
                    value : null,
                    //onblur:'ignore',
                    source: new_source,
                    select2: {
                        'width': 140
                    }
                }).insertAfter(city);//insert it after previous instance
                $(city).remove();//remove previous instance

            }
        });

        $('#city').editable({
            type: 'select2',
            value : 'Amsterdam',
            source: cities[currentValue],
            select2: {
                'width': 140
            }
        });

        $('#signup').editable({
            type: 'adate',
            date: {
                format: 'yyyy-mm-dd',
                viewformat: 'yyyy-mm-dd',
                weekStart: 1,
                language: 'zh-CN',
            }
        })

        $('#age').editable({
            type: 'spinner',
            name : 'age',
            spinner : {
                min : 16,
                max : 99,
                step: 1,
                on_sides: true
                //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
            }
        });


        $('#login').editable({
            type: 'slider',
            name : 'login',
            slider : {
                min : 1,
                max: 50,
                width: 100
                //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
            },
            success: function(response, newValue) {
                if(parseInt(newValue) == 1)
                    $(this).html(newValue + " hour ago");
                else $(this).html(newValue + " hours ago");
            }
        });

        $('#about').editable({
            mode: 'inline',
            type: 'wysiwyg',
            name : 'about',
            wysiwyg : {
                //css : {'max-width':'300px'}
            },
            success: function(response, newValue) {
            }
        });

        try {
            // 修改头像
            try {
                document.createElement('IMG').appendChild(document.createElement('B'));
            } catch(e) {
                Image.prototype.appendChild = function(el){}
            }

            var last_gritter
            $('#avatar').editable({
                type: 'image',
                name: 'avatar',
                value: null,
                image: {
                    //specify ace file input plugin's options here
                    btn_choose: '选择头像',
                    droppable: true,
                    maxSize: 110000,//~100Kb
                    //and a few extra ones here
                    name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                    on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                        if(last_gritter) $.gritter.remove(last_gritter);
                        if(error_type == 1) {//file format error
                            last_gritter = $.gritter.add({
                                title: '上传文件类型错误!',
                                text: '请选择一个JPG、GIF、PNG图片格式文件！',
                                class_name: 'gritter-error gritter-center'
                            });
                        } else if(error_type == 2) {//file size rror
                            last_gritter = $.gritter.add({
                                title: '上传图片文件过大!',
                                text: '图像大小不超过100KB!',
                                class_name: 'gritter-error gritter-center'
                            });
                        }
                        else {//other error
                        }
                    },
                    on_success : function() {
                        $.gritter.removeAll();
                    },
                },
                url: function(params) {
                    var submit_url = '/admin/upload', // 提交页面
                        deferred   = null,
                        avatar 	   = '#avatar',			// 选择对象
                        value 	   = $(avatar).next().find('input[type=hidden]:eq(0)').val();

                    // 数据验证
                    if(!value || value.length == 0) {
                        deferred = new $.Deferred
                        deferred.resolve();
                        return deferred.promise();
                    }

                    // 提交表单
                    var $form 	   = $(avatar).next().find('.editableform:eq(0)'),
                        file_input = $form.find('input[type=file]:eq(0)'),
                        pk 		   = $(avatar).attr('data-pk'),	//primary key to be sent to server
                        ie_timeout = null;


                    if( "FormData" in window ) {
                        var formData_object = new FormData();//create empty FormData object

                        //serialize our form (which excludes file inputs)
                        $.each($form.serializeArray(), function(i, item) {
                            //add them one by one to our FormData
                            formData_object.append(item.name, item.value);
                        });
                        //and then add files
                        $form.find('input[type=file]').each(function(){
                            var field_name = $(this).attr('name');
                            var files = $(this).data('ace_input_files');
                            if(files && files.length > 0) {
                                formData_object.append(field_name, files[0]);
                            }
                        });

                        //append primary key to our formData
                        formData_object.append('pk', pk);

                        deferred = $.ajax({
                            url: submit_url,
                            type: 'POST',
                            processData: false,//important
                            contentType: false,//important
                            dataType: 'json',//server response type
                            data: formData_object
                        })
                    }
                    else {
                        deferred = new $.Deferred

                        var temporary_iframe_id = 'temporary-iframe-'+(new Date()).getTime()+'-'+(parseInt(Math.random()*1000));
                        var temp_iframe =
                            $('<iframe id="'+temporary_iframe_id+'" name="'+temporary_iframe_id+'" \
							frameborder="0" width="0" height="0" src="about:blank"\
							style="position:absolute; z-index:-1; visibility: hidden;"></iframe>')
                                .insertAfter($form);

                        $form.append('<input type="hidden" name="temporary-iframe-id" value="'+temporary_iframe_id+'" />');

                        //append primary key (pk) to our form
                        $('<input type="hidden" name="pk" />').val(pk).appendTo($form);
                        temp_iframe.data('deferrer' , deferred);

                        // 表单添加属性
                        $form.attr({
                            action: submit_url,
                            method: 'POST',
                            enctype: 'multipart/form-data',
                            target: temporary_iframe_id //important
                        });

                        $form.get(0).submit();

                        //if we don't receive any response after 30 seconds, declare it as failed!
                        ie_timeout = setTimeout(function(){
                            ie_timeout = null;
                            temp_iframe.attr('src', 'about:blank').remove();
                            deferred.reject({'status':'fail', 'message':'Timeout!'});
                        } , 30000);
                    }


                    //deferred callbacks, triggered by both ajax and iframe solution
                    deferred
                        .done(function(result) {
                            if(result.status == 1)
                                $(avatar).get(0).src = result.data.fileDir;
                            else
                                layer.msg(result.msg, {icon:5, time:1000})
                        })
                        .fail(function(result) {//failure
                            layer.msg('请求页面没有响应');
                        })
                        .always(function() {//called on both success and failure
                            if(ie_timeout) clearTimeout(ie_timeout)
                            ie_timeout = null;
                        });

                    return deferred.promise();
                },
                success: function(response, newValue) {

                },
            })
        }catch(e) {}

        // 最近活动的信息下拉
        $('#profile-feed-1').ace_scroll({
            height: '250px',
            mouseWheelLock: true,
            alwaysVisible : true
        });
        $('a[ data-original-title]').tooltip();
        $('.easy-pie-chart.percentage').each(function(){
            var barColor = $(this).data('color') || '#555';
            var trackColor = '#E2E2E2';
            var size = parseInt($(this).data('size')) || 72;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate:false,
                size: size
            }).css('color', barColor);
        });
    })
</script>
