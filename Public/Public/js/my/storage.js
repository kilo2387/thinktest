/**
 * Created by SEELE on 2016/11/5.
 */


/**
 * 开头，我们先测试本地存储是否已被填充（即，页面之前被访问过）
 */
if(!localStorage.getItem('bgcolor')) {
    populateStorage();
} else {
    setStyles();
}
/**
 * 使用 Storage.getItem() 可以从存储中获取一个数据项
 * 该方法接受数据项的键作为参数，并返回数据值
 */
function setStyles() {
    var currentColor = localStorage.getItem('bgcolor');
    var currentFont = localStorage.getItem('font');
    var currentImage = localStorage.getItem('image');
    //
    document.getElementById('bgcolor').value = currentColor;
    document.getElementById('font').value = currentFont;
    document.getElementById('image').value = currentImage;
    //更新页面的样式和图片
    htmlElem.style.backgroundColor = '#' + currentColor;
    pElem.style.fontFamily = currentFont;
    imgElem.setAttribute('src', currentImage);
}
/**
 * populateStorage() 方法在本地存储中设置三项数据 — 背景颜色、字体和图片路径。
 * 然后执行 setStyles() 方法来更新页面的样式。
 * Storage.setItem() 方法可被用来创建新数据项和更新已存在的值。
 * 该方法接受两个参数——要创建/修改的数据项的键，和对应的值。
 */
function populateStorage() {
    localStorage.setItem('bgcolor', document.getElementById('bgcolor').value);
    localStorage.setItem('font', document.getElementById('font').value);
    localStorage.setItem('image', document.getElementById('image').value);

    setStyles();
}
/**
 * 绑定onchange监听器
 * @type {populateStorage}
 */
bgcolorForm.onchange = populateStorage;
fontForm.onchange = populateStorage;
imageForm.onchange = populateStorage;