const add_post = document.getElementById('add-post');
const add_post2 = document.getElementById('add-post2');
const boxVisualProduct = document.getElementById('boxVisualProduct');
const boxVisualProduct2 = document.getElementById('productos');
const closeOut = document.getElementById('close1');
const closeOut2 = document.getElementById('close2');

boxVisualProduct.style.display = "none";
boxVisualProduct2.style.display = "none";

add_post.addEventListener('click', showOptionCreatePost);
add_post2.addEventListener('click', showOptionCreatePost2);
closeOut.addEventListener('click', closeShowOptionCreatePost);
closeOut2.addEventListener('click', closeShowOptionCreatePost2);

function showOptionCreatePost(){
    active(add_post);
    boxVisualProduct.style.display = "inherit";
}

function closeShowOptionCreatePost(){
    in_active(add_post);
    boxVisualProduct.style.display = "none";
}

function showOptionCreatePost2(){
    active(add_post2);
    boxVisualProduct2.style.display = "inherit";
}

function closeShowOptionCreatePost2(){
    in_active(add_post2);
    boxVisualProduct2.style.display = "none";
}

function active(obj){
    obj.style.backgroundColor= '#134163';
    obj.style.boxShadow= '2px 5px 6px rgba(68,68,68,0.5)';
}

function in_active(obj){
    obj.style.backgroundColor= 'steelblue';
    obj.style.boxShadow= '';
}