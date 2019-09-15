    
    console.log(supMenuLinks.inSes);
    console.log(supMenuLinks.Reg);
    console.log(supMenuLinks.cerSes);
    
    function showSupMenuInit(a,b,c){
    if(var_a == ""){
        a.style.display='none';
        b.style.display='';
        c.style.display='';
    }
    else{
        b.style.display='none';
        c.style.display='none';
        a.style.display='';
    }
    }
    
    showSupMenuInit(supMenuLinks.cerSes, supMenuLinks.inSes, supMenuLinks.Reg);