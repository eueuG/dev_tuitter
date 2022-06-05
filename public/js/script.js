function textareascript() {
    let textarea = document.getElementById('textarea');
    let clientHeight = textarea.clientHeight;

    textarea.addEventListener('input', ()=>{
        const resetHeight = new Promise(resolve => {
            resolve((textarea.style.height = "auto"))
        })
        resetHeight.then(() => {
        const scrollHeight = textarea.scrollHeight
        textarea.style.height = scrollHeight + "px"
        })
    });
}

window.onload = textareascript;