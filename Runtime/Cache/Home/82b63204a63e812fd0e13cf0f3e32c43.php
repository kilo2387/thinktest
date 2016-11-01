<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script>
    var numbers = [1,2,3,4,5,6,7];

    //alert(numbers.indexOf(5));   //indexOf()(全等)找出某个元素的位置,没有的话返回-1
    //alert(numbers.lastIndexOf(5));  //lastIndexOf()(全等)从末尾开始找

    //    every(); //对数组中的每一项运行给定函数,如果该函数对每一项都返回true,则返回true
    //    filter(); //对数组中的每一项运行给定函数,返回true的项组成的数组
    //    forEach();  //对数组中每一项运行给定函数..这个方法没有返回值
    //    map();  //对数组中每一项运行给定函数,返回每次函数调用的结果组成的数组
    //    some(); //对数组中每一项运行给定函数,如果该函数对任一项返回true,则返回true


    /**
     * 5个迭代方法:两个参数(函数,作用域) 函数:接收三个参数,数组的项的值(item),项的位置(index),数组本身(array)
     * @filter:迭代每一项,返回结果为true的项组成的数组
     * @some:迭代后,有一项为true,那么就返回true
     * @forEach:只迭代,无返回值
     * @every:迭代后,有一项为false,那么返回false
     * @map:类似filter都是返回结果,返回所有结果组成的数组
     */

    //    reduce(); //从头开始,接收两个参数,把上一个传递给下一个
    //    reduceRight();
    /**
     * 函数接收:prev(上一次操作的结果) cur(当前的项) index(位置) array(对象)
     */

            //实例化日期对象
            //var now = new Date(2007,0,1);
            //var now = new Date(Date.now());
            //var now = Date.now(); //取得时间戳
    var now = new Date();
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
    }
    //alert(getLocalTime(1293072805));

    /**
     * JS函数没有重载的概念
     * 函数的声明会先读取;函数表达式则必须等到解析器执行到时才会执行
     */
    //函数的内部,有两个特殊的属性:
    /**
     * 事件冒泡
     */

    function testClick(){
        var mydiv = document.getElementById("myDiv");
        //alert(mydiv);
        mydiv.innerHTML += '!';
    }
    setTimeout(function(){

    });


</script>
<body>
<div id="myDiv" onmousedown="testClick()">hahaha</div>

{name}

</body>
</html>