//CADASTRO DE CHAVES
/*const formCadastro = document.querySelector('.form1_cad_Chaves');
const button = document.querySelector('.form1_cad_Chaves div');
const formsChave = document.querySelectorAll('#formChave');
const buttonFechaCad = document.querySelector('#fechaCadastro');
var aux;
formsChave.forEach((element, index)=>{
    element.classList.remove('active');
    button.addEventListener('click', ()=>{
        element.classList.toggle('active');
        aux = index;      
    });
    
})*/

const formCadastro = document.querySelector('.form1_cad_Chaves');
const botao_cadastro = document.querySelector('#botao-cadastro1');
const formsChave = document.querySelectorAll('#formChave');
const buttonFechaCad = document.querySelector('#fechaCadastro');


const botaoSalvar = document.querySelector('#SubmitAddChave');

const formAlterar = document.querySelector('.form2_alt_Chaves');
const botao_alterar = document.querySelector('#botao-alterar1');
const botao_excluir = document.querySelector('#botao-excluir1');

function abrirForm(){
    formCadastro.style.display = 'flex';
    botao_cadastro.style.display = "none";
    formAlterar.style.display = 'none';
    botao_alterar.style.display = 'flex';
}

function fecharFormSalvar(){
    formCadastro.style.display = 'none';
    botao_cadastro.style.display = "flex";
}

function fecharFormAlt(){
    formAlterar.style.display = 'flex';
    formCadastro.style.display = 'none';
    botao_cadastro.style.display = "flex";
    botao_alterar.style.display = 'none';
}

function fecharFormExclir(){
    
}



botaoSalvar.addEventListener("click", fecharFormSalvar);

botao_cadastro.addEventListener("click", abrirForm);

botao_alterar.addEventListener("click", fecharFormAlt);

botao_cadastro.addEventListener("click", );