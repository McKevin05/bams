var data = 
{
    "tg":
    {
        "lang_login":"",
        "lang_loginReminder":"",
        "lang_loginError":"",
        "lang_loginButton":"",
        "lang_voteReminder":"",
        "lang_votePosition":"",
        "lang_voteReview":"",
        "lang_voteUndervote":"",
        "lang_voteConfirm":"",
        "lang_voteCancel":"",
        "lang_resultDetails":"",
        "lang_resultComplete":"",
        "lang_resultThanks":""        
    },

    "en":
    {
        "lang_login":"",
        "lang_loginReminder":"",
        "lang_loginError":"",
        "lang_loginButton":"",
        "lang_voteReminder":"",
        "lang_votePosition":"",
        "lang_voteReview":"",
        "lang_voteUndervote":"",
        "lang_voteConfirm":"",
        "lang_voteCancel":"",
        "lang_resultDetails":"",
        "lang_resultComplete":"",
        "lang_resultThanks":""
    }
    
}
document.querySelector('#togBtn').addEventListener('input', (event) => 
    {
        document.querySelector('.title').textContent = data[event.currentTarget.checked ? 'english' : 'tagalog'].title;
    }
);

function language(lang = "tg") 
{
    console.log(data[lang]);
}
$(document).ready(function(){
    language();
})
