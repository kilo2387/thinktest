/**
 * Created by SEELE on 2016/11/5.
 */
/**
 * 绑定事件监听器
 */
window.addEventListener('storage', function(e) {
    document.querySelector('.my-key').textContent = e.key;
    document.querySelector('.my-old').textContent = e.oldValue;
    document.querySelector('.my-new').textContent = e.newValue;
    document.querySelector('.my-url').textContent = e.url;
    document.querySelector('.my-storage').textContent = e.storageArea;
});

document.querySelector('#demo'); //获取id为demo的第一个元素
document.querySelectorAll('.class'); //获取class的所有元素
document.querySelector("p.class");  //获取文档中class的第一个<p>元素