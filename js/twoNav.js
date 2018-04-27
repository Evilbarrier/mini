window.onload=function(){
	/*
	 * 头部的二级导航
	 * 原banner的二级导航
	 */
	
	//原banner上的二级导航
	var J_navCategory=document.getElementById("J_navCategory");
	var siteCategory=document.getElementById("site-category");
	
	J_navCategory.onmouseover=function(){
		siteCategory.style.display='block';
	};
	J_navCategory.onmouseout=function(){
		siteCategory.style.display='none';
	};
	
	//原banner图上的二级导航，
	var categoryItem=document.getElementsByClassName("category-item");
	var children=document.getElementsByClassName("children");
	for(i=0;i<categoryItem.length;i++){
		categoryItem[i].index=i;
		categoryItem[i].onmouseover=function(){
			children[this.index].style.display='block';
		};
		categoryItem[i].onmouseout=function(){
			children[this.index].style.display='none';
		};
	}
	
	//头部二级导航
	var navItm=document.getElementsByClassName("nav-itm");
	var childrenList=document.querySelectorAll(".head-nav-menu .children-list");
	var J_navMenu=document.getElementById("J_navMenu");
	
	for(i=0;i<navItm.length;i++){
		navItm[i].index=i;
		navItm[i].onmouseover=function(){
			J_navMenu.style.display='block';
			childrenList[this.index].style.display='block';
		};
		navItm[i].onmouseout=function(){
			J_navMenu.style.display='none';
			childrenList[this.index].style.display='none';
		};
		
		
	var book=['小米手机6','小米手机5X','红米note4X','红米手机4X','小米Max&nbsp;2','手环','耳机','充电宝','运动鞋','路由器','小米盒子','电视'];
    		var search=document.getElementById("search");
    		var J_keywordList=document.getElementById("J_keywordList");
    		var lis=document.getElementsByTagName('li');	//动态获取li的个数
    		var last=null;	//上一个选中的元素
    		
    		//生成元素
    		createData(book);
    		function createData(arr){
    			J_keywordList.innerHTML='';	//先清空，要不然的话，再次创建的内容是累加的形式
    			
    			for(var i=0;i<arr.length;i++){
    				var li=document.createElement("li");
    				li.index=i;
    				li.innerHTML=arr[i];
    				li.onclick=J_keywordListClick;
    				
    				J_keywordList.appendChild(li);
    			}
    		};
    		
    		//表单事件：onsearch,onkeydown,onclick,onkeyup
    		
    		//输入框点击的时候要显示列表
    		search.onclick=function(ev){
    			J_keywordList.style.display='block';
    			ev.cancelBubble=true;
    		};
    		
    		//点击其它地方的时候要隐藏列表
    		document.onclick=function(){
    			J_keywordList.style.display='none';
    		};
    		
    		
    		//每个li标签的点击事件
    		function J_keywordListClick(){
    			if(last && last!=this){
    				last.className='';
    			}
    			
    			if(this.className==''){
    				//console.log(1);
    				//这个条件成立说明现在自己身上没有class
    				this.className='keyword-list-active';
    				search.value=this.innerHTML;
    				last=this;
    			}else{
    				this.className='';
    				search.value='';
    				
    			}
    		};
    		
    		
    		//输入框删除功能
    		search.oninput=function(){
    			//alert(2);
    			var str=this.value;	//用户删除后剩下的内容
    			var newData=[];		//存储能找到的数据
    			
    			//根据用户删除后剩下的内容去book里找匹配的数据，找到后放在一个新的数组中
    			for(var i=0;i<book.length;i++){
    				if(book[i].indexOf(str)!=-1){
    					//这个条件成立说明在book的数组中找到了str
    					newData.push(book[i]);
    				}
    			}
    			
    			//console.log(newData);
    			createData(newData);
    			J_keywordList.style.display='block';		//在删除的时候让列表显示出来
    		};
    		
    		
	
		};
};
