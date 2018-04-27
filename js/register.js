window.onload=function(){
	/*
	 * 1.国家&&手机号码的点击事件
	 * 		点击出现一个搜索框
	 * 2.立即注册的点击事件
	 * 		点击输入密码
	 */
	
	//上面的点击出现搜索框的的功能
		var book=['中国','中国台湾','中国香港','Brazil'];
    		
			var CN=document.getElementById("CN");
			var box=document.getElementById("box");
			var coun=document.getElementById("coun");
    		var list=document.getElementById("list");
    		var last=null;
    		
    		//生成元素
    		createData(book);
    		function createData(arr){
    			list.innerHTML='';
    			
    			for(var i=0;i<arr.length;i++){
    				var li=document.createElement("li");
    				li.index=i;
    				li.innerHTML=arr[i];
    				li.onclick=listClick;
    				
    				list.appendChild(li);
    			}
    		};
    		
    		//输入框点击的时候要显示列表
    		CN.onclick=function(ev){
    			box.style.display='block';
    			list.style.display='block';
    			ev.cancelBubble=true;
    		};
    		
    		//每个li标签的点击事件
    		function listClick(){
    			console.log(this);
    			if(last && last!=this){
    				last.className='';
    			}
    			
    			if(this.className==''){
    				this.className='active';
    				coun.innerHTML=this.innerHTML;
    				last=this;
    			}else{
    				this.className='';
    				coun.innerHTML='';
    				
    			}
    		};
    		
	//下面的点击出现搜索框的的功能
		var bookCode=['+86','+886','+852','+55'];
    		
			var tell=document.getElementById("tell");
			var tellCode=document.getElementById("code");
			var boxCode=document.getElementById("box-code");
    		var listCode=document.getElementById("list-code");
    		var listPC=document.getElementById("p-c");
    		var pCode=listPC.getElementsByTagName("p")
    		var last1=null;
    		//生成元素
    		createCode(bookCode,book);
    		function createCode(arr,arR){
    			listCode.innerHTML='';
    			
    			for(var i=0;i<arr.length;i++){
    				var p=document.createElement("p");
    				p.innerHTML=arr[i];
    				p.onclick=listCodeClick;
    				
    				listPC.appendChild(p);
    				
    				var li=document.createElement("li");
    				li.index=i;
    				li.innerHTML=arR[i];
    				li.onclick=listCodeClick;
    				
    				listCode.appendChild(li);
    			}
    		};
    		
    		//输入框点击的时候要显示列表
    		tell.onclick=function(ev){
    			boxCode.style.display='block';
    			listCode.style.display='block';
    			ev.cancelBubble=true;
    		};
    		
    		//点击其它地方的时候要隐藏列表
    		document.onclick=function(){
    			listCode.style.display='none';
    			boxCode.style.display='none';
    			list.style.display='none';
    			box.style.display='none';
    		};
    		
    		
    		//每个p标签的点击事件
    		function listCodeClick(){
    			if(last && last!=this){
    				last.className='';
    			}
    			
    			if(this.className==''){
    				this.className='active';
    				tellCode.innerHTML=pCode[this.index].innerHTML;
    				last=this;
    			}else{
    				this.className='';
    				tellCode.innerHTML='';
    				
    			}
    		};
    
    //手机号的正则
    var tellTxt=document.getElementById("tellTxt");
    var tellPhone=document.getElementById("tell-phone");
    
	tellTxt.onblur=function(){
		var Regex=/^[1]{1,}\d{10}$/;
		//判断用户名
		if(tellTxt.value=='' || tellTxt.value==null){
			tellPhone.innerHTML='<span style="color: red;">手机号码不能为空</span>'
			//test();  正则.test(你的对象)
		}else if(!Regex.test(tellTxt.value)){
			tellPhone.innerHTML='<span style="color: red;">手机号码格式错误</span>'
		}else{
			tellPhone.innerHTML='<span style="color: green;">√</span>'
		}
	};
	
	
	//密码的正则
	var passWord=document.getElementById("passWord");
	var passWord1=document.getElementById("passWord1");
	var cprPaswrd=document.getElementById("cpr-paswrd");
	var passWordCpr=false;
	passWord.onblur=function(){
		var Regex=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
		//判断密码
		if(passWord.value=='' || passWord.value==null){
			cprPaswrd.innerHTML='<span style="color: red;">密码不能为空</span>'
			passWordCpr=false;
			//test();  正则.test(你的对象)
		}else if(!Regex.test(passWord.value)){
			cprPaswrd.innerHTML='<span style="color: red;">密码格式错误</span>'
			passWordCpr=false;
		}else{
			cprPaswrd.innerHTML='<span style="color: green;">√</span>'
		}
	};
	
	passWord1.oninput=function(){
		if(passWord.value!=passWord1.value){
			cprPaswrd.innerHTML='<span style="color: red;">两次输入的密码不一致</span>'
			passWordCpr=false;
		}else{
			cprPaswrd.innerHTML='<span style="color: green;">√</span>'
			passWordCpr=true;
		}
	};
	
	//按钮的点击事件
	var promptly=document.getElementById("promptly");
	var promptly1=document.getElementById("promptly1");
    var cipher=document.getElementById("cipher");
	var regbox=document.getElementById("regbox");
	var countell=document.getElementById("countell");
    var cprChone=document.getElementById("cpr-phone");
    var once=document.getElementById("once");
    var regboxBtn=document.getElementById("regboxBtn");
	var zphone=document.getElementById("zphone");

    function RemainTime(){
        var iTime = 59;
        zphone.value = iTime+'s';
        var timer = setInterval(function(){
            iTime--;
            zphone.value = iTime+'s';

            if(iTime <= 0){
                zphone.value = '重新获取';
                clearInterval(timer);
            }
        },1000);
    }    
    
     function get_code(){
           $.post("./dysms_php/aliyun-dysms-php-sdk/api_demo/SmsDemo.php",{phone:$("#tellTxt").val()},function(meg){
                  if(meg=="获取成功"){
                    alert(1)
                      RemainTime();
                  }
                     
           })
      }
      zphone.onclick=function(){
        console.log(this);
         get_code();
      }
    
    promptly.onclick=function(){
        if(tellPhone.innerHTML!='<span style="color: green;">√</span>'){
            alert('请确认手机号码无误！');
            return;
        }
        regbox.style.display='block';
        regboxBtn.style.display='block';
        countell.style.display='none';
        promptly.style.display='none';
        once.style.display='none';
        cprChone.innerHTML=tellTxt.value;

        get_code();
        
    };
    promptly1.onclick=function(){
        console.log(!passWordCpr)
        if(!passWordCpr){
            alert('请确认密码无误！');
            return;
    }


    
		
		
		//存储cookie
	/*	document.cookie='userName='+tellTxt.value;
		document.cookie='passWord='+passWord.value;
		
		window.location="login.html";*/
		
	};
};	

