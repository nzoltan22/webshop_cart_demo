
var order=0;

$(document).ready(function(){
    
    productlistload();
    cartlistload();

    $("#orderabc").click(function(){
        order=0;
        productlistload();
    });    

    $("#orderprice").click(function(){
        order=1;
        productlistload();
    });    

    $("#cartsave").click(function(){
        $.get('ajax/savecart',function(){
            cartlistload();
        });
    });    
    
    $("#cartload").click(function(){
        $.get('ajax/loadcart',function(){
            cartlistload();
        });
    });    
    
    $("#cartdelete").click(function(){
        $.get('ajax/deletecart',function(){
            cartlistload();
        });
    });    
});

function productlistload(){
    $("#productlist").load('ajax/productlist?order='+order);
}

function addcart(id){
    $.get('ajax/addcart',{id:id},function(){
        cartlistload();
    });
}

function cartlistload(){
    $("#cartlist").load('ajax/cartlist');
}
