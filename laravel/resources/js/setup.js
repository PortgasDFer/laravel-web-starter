let currentStep = 1;

window.nextStep = function(step) {

    document
        .querySelectorAll('.step')
        .forEach(el => el.classList.remove('active'));

    document
        .getElementById('step' + step)
        .classList.add('active');

    currentStep = step;

    updateProgress();
    updateMenu();

    if(step === 4){
        fillPreview();
    }
}


function updateProgress(){

    const width = (currentStep / 4) * 100;

    document
        .getElementById('progress')
        .style.width = width + '%';
}

function updateMenu(){

    for(let i=1;i<=4;i++){

        const item = document.getElementById('menu-step-' + i);

        if(i <= currentStep){
            item.classList.add('active');
        }else{
            item.classList.remove('active');
        }
    }
}

function fillPreview(){

    document.getElementById('preview_name').textContent =
        document.getElementById('site_name').value;

    document.getElementById('preview_description').textContent =
        document.getElementById('site_description').value;

    document.getElementById('preview_email').textContent =
        document.getElementById('email').value;

    document.getElementById('preview_phone').textContent =
        document.getElementById('phone').value;

    document.getElementById('preview_whatsapp').textContent =
        document.getElementById('whatsapp').value;
}

updateMenu();


document
    .getElementById('logo')
    .addEventListener('change', function(){

        const file = this.files[0];

        if(!file) return;

        document.getElementById('file-name').textContent =
            file.name;

        const reader = new FileReader();

        reader.onload = function(e){

            document.getElementById('preview-image').src =
                e.target.result;
        };

        reader.readAsDataURL(file);
    });


    document
    .getElementById('favicon')
    .addEventListener('change', function(){

        const file = this.files[0];

        if(!file) return;

        document.getElementById('favicon-name').textContent =
            file.name;

        const reader = new FileReader();

        reader.onload = function(e){

            document.getElementById('favicon-preview').src =
                e.target.result;
        };

        reader.readAsDataURL(file);
    });
