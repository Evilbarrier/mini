window.onload=function(){
	/*
	 * 手机短信登录/注册的点击事件
	 * 	1.点击登录框的主体内容进行切换
	 * 	2.立即注册&&忘记密码  消失不见
	 * 	3.事件源变成    用户名密码登录
	 * 扫码登录的点击事件
	 * 	主体内容切换
	 * 登录按钮的点击事件
	 * 	如果当前页面有内容输入错误，则不能点击
	 */
	var hNote=document.getElementById("h-note");
	var hLogin=document.getElementById("h-login");
	var hWhNumco=document.getElementById("h-wh-numco");
	var hNuco=document.getElementById("h-nuco");
	var hForget=document.getElementById("h-forget");
	
	hNote.onclick=function(){
		if(hNote.innerHTML=='用户名密码登录'){
			hForget.style.display='block';
			hNote.innerHTML='手机短信登录';
			hNuco.style.display='block';
			hWhNumco.style.display='none';
			hLogin.value='登录';
			
			return;
		}
		hForget.style.display='none';
		hNote.innerHTML='用户名密码登录';
		hNuco.style.display='none';
		hWhNumco.style.display='block';
		hLogin.value='立即登录/注册';
	};
	
	var accnum=document.getElementById("accnum");
	var scan=document.getElementById("scan");
	//账号登录的点击事件
	var accNum=document.getElementById("accNum");
	
	accNum.onclick=function(){
		accnum.style.display='block';
		scan.style.display='none';
		accNum.style.color='#F56600';
		scanClick.style.color='#333';
	};
	
	//扫码登录事件
	var scanClick=document.getElementById("scanClick");
	
	scanClick.onclick=function(){
		accnum.style.display='none';
		accNum.style.color='#333';
		scan.style.display='block';
		scanClick.style.color='#f56600';
	};
	
	//利用登录界面的手机注册时的事件
	var hPhone=document.getElementById("h-phone");
	var hProof=document.getElementById("h-proof");
	var Hlogin=document.getElementById("H-login");
	var hValidateCode=document.getElementById("h-validateCode");
	var passWordCpr=false;
	
	
	
	//手机注册登录
	
	var hNum=document.getElementById("h-num");
	var hCode=document.getElementById("h-code");
	var hLogin=document.getElementById('h-login')
	var HLogin=document.getElementById('H-login')
	var hNote=document.getElementById('h-note')

	var hProof=document.getElementById('h-proof')

	 function RemainTime(){
        var iTime = 59;
        hProof.value = iTime+'s';
        var timer = setInterval(function(){
            iTime--;
            hProof.value = iTime+'s';

            if(iTime <= 0){
                hProof.value = '重新获取';
                clearInterval(timer);
            }
        },1000);
    }    

	function get_code(){
       $.post("./dysms_php/aliyun-dysms-php-sdk/api_demo/SmsDemo.php",{phone:$("#h-phone").val()},function(meg){
              if(meg=="获取成功"){
              	alert($("#h-phone").val());
                  RemainTime();
              }
                 
       })
    }

    hProof.onclick=function(){
    	get_code();
    };

			
	
	
};
