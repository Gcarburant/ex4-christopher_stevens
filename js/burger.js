(function(){
    let burger = document.querySelector('.burger')
    burger.addEventListener('mousedown', function(){
        console.log("burger")
        if(!this.classlist.contains("burger__X"))
        {
            this.classlist.add('burger__X')
        }
        else
        {
            this.classlist.remove('burger__X')
        }
    })
})()