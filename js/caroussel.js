(function(){
    console.log("vive la boîte modale")  
    let boite__modale = document.querySelector(".boite__modale")
    let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
    console.log("galerie__img.lenght" + galerie__image.length)
    let boite__modale__ferme = document.querySelector(".boite__modale__ferme")
    let boite__modale__texte = document.querySelector(".boite__modale__texte")
    
    boite__modale__ferme.addEventListener('mousedown', function(){
      boite__modale.classList.remove('boite__modale--ouvrir')
    })

    let img = document.createElement('img');
    boite__modale__texte.appendChild(img);
  
 
  
    for (const bout of cours__desc__bouton) {
        bout.addEventListener('mousedown',function(){
          boite__modale.classList.add('boite__modale--ouvrir')
          console.log(this.parentNode.parentNode.children[0].innerHTML)
          boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML
        })
    }
  
  
  
    /*
  this.parentNode
  this.parentNode.children(2)
    */
  
  })()