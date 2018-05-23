$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, 'Пароль должен быть длиной от 6 до 12 символов, включая буквы (A-Z, a-z) и цифры (0-9). Без специальных символов (^@()_#*+/ \\"?!=.{}~`&) и без пробелов.');


$.validator.addMethod("regx_first_name", function(value, element, regexpr) {
    return regexpr.test(value);
}, "имя должно содержать более 2 символов без каких-либо специальных символов и пробелов");

$.validator.addMethod("regx_last_name", function(value, element, regexpr) {
    return regexpr.test(value);
}, "фамилия должна содержать более 2 символов без каких-либо специальных символов и пробелов");


$("#bigForm1").validate({

    rules:{

            first_name:{
            required: true,
            regx_first_name: /^(([а-яА-ЯёЁa-zA-Z]{2,25}\s{0,1}[а-яА-ЯёЁa-zA-Z]{2,25})|([а-яА-ЯёЁa-zA-Z]{2,25}))$/,
            minlength: 2,
            maxlength: 64
        },

        last_name:{
            required: true,
            regx_last_name: /^[а-яА-ЯёЁa-zA-Z]{2,}$/,
            minlength: 2,
            maxlength: 64

        },

        email:{
            required: true,
            email: true,

        },

        phone:{
            required: true,
            number: true,
            minlength: 6,
            maxlength: 25,
        },

        password:{
            required: true,
            regx: /^(([a-z0-9]*\d+[a-z]+[a-z0-9]*)|([a-z0-9]*[a-z]+\d+[a-z0-9]*))$/i,
            minlength: 6,
            maxlength: 12,
        }
    },

    messages:{

        first_name:{
            required: "Поле имя обязательно для заполнения",
            minlength: "Поле имя обязательно для заполнения",
            maxlength: "Введите действительное имя",
        },

        last_name:{
            required: "Поле фамилия обязательно для заполнения",
            minlength: "Поле фамилия обязательно для заполнения",
            maxlength: "Введите действительную фамилию",
        },

        email:{
            required: "Поле email обязательно для заполнения",
            email: "Поле email должно быть действительным электронным адресом",
        },

        phone:{
            required: "Поле телефон обязательно для заполнения",
            number: "Поле телефон должно быть числом",
            minlength: "Поле телефон должно быть не менее 6 символов",
            maxlength: "Введите действительный телефон",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },

        phonecc:{
            required: "Поле обязательно для заполнения",
        },

    }

});

$("#bigForm2").validate({

    rules:{

        first_name:{
            required: true,
            regx_first_name: /^(([а-яА-ЯёЁa-zA-Z]{2,25}\s{0,1}[а-яА-ЯёЁa-zA-Z]{2,25})|([а-яА-ЯёЁa-zA-Z]{2,25}))$/,
            minlength: 1,
            maxlength: 64
        },

        last_name:{
            required: true,
            regx_last_name: /^[а-яА-ЯёЁa-zA-Z]{2,}$/,
            minlength: 1,
            maxlength: 64
        },

        email:{
            required: true,
            email: true,

        },

        phone:{
            required: true,
            number: true,
            minlength: 6,
            maxlength: 25,

        },


        password:{
            required: true,
            regx: /^(([a-z0-9]*\d+[a-z]+[a-z0-9]*)|([a-z0-9]*[a-z]+\d+[a-z0-9]*))$/i,
            minlength: 6,
            maxlength: 12,
        }
    },

     messages:{

        first_name:{
            required: "Поле имя обязательно для заполнения",
            minlength: "Поле имя обязательно для заполнения",
            maxlength: "Введите действительное имя",
        },

        last_name:{
            required: "Поле фамилия обязательно для заполнения",
            minlength: "Поле фамилия обязательно для заполнения",
            maxlength: "Введите действительную фамилию",
        },

        email:{
            required: "Поле email обязательно для заполнения",
            email: "Поле email должно быть действительным электронным адресом",
        },

        phone:{
            required: "Поле телефон обязательно для заполнения",
            number: "Поле телефон должно быть числом",
            minlength: "Поле телефон должно быть не менее 6 символов",
            maxlength: "Введите действительный телефон",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },
        
        phonecc:{
            required: "Поле обязательно для заполнения",
        },

    }

});

$("#bigForm3").validate({

    rules:{

        first_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
            regx_first_name: /^(([а-яА-ЯёЁa-zA-Z]{2,25}\s{0,1}[а-яА-ЯёЁa-zA-Z]{2,25})|([а-яА-ЯёЁa-zA-Z]{2,25}))$/,
        },

        last_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
            regx_last_name: /^[а-яА-ЯёЁa-zA-Z]{2,}$/,
        },

        email:{
            required: true,
            email: true,

        },

        phone:{
            required: true,
            number: true,
            minlength: 6,
            maxlength: 25,

        },

        password:{
            required: true,
            regx: /^(([a-z0-9]*\d+[a-z]+[a-z0-9]*)|([a-z0-9]*[a-z]+\d+[a-z0-9]*))$/i,
            minlength: 6,
            maxlength: 12,
        }
    },

   messages:{

        first_name:{
            required: "Поле имя обязательно для заполнения",
            minlength: "Поле имя обязательно для заполнения",
            maxlength: "Введите действительное имя",
        },

        last_name:{
            required: "Поле фамилия обязательно для заполнения",
            minlength: "Поле фамилия обязательно для заполнения",
            maxlength: "Введите действительную фамилию",
        },

        email:{
            required: "Поле email обязательно для заполнения",
            email: "Поле email должно быть действительным электронным адресом",
        },

        phone:{
            required: "Поле телефон обязательно для заполнения",
            number: "Поле телефон должно быть числом",
            minlength: "Поле телефон должно быть не менее 6 символов",
            maxlength: "Введите действительный телефон",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },
        
        phonecc:{
            required: "Поле обязательно для заполнения",
        },

    }

});

$("#scrollForm").validate({

    rules:{

        first_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
            regx_first_name: /^(([а-яА-ЯёЁa-zA-Z]{2,25}\s{0,1}[а-яА-ЯёЁa-zA-Z]{2,25})|([а-яА-ЯёЁa-zA-Z]{2,25}))$/,
        },

        last_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
            regx_last_name: /^[а-яА-ЯёЁa-zA-Z]{2,}$/,
        },

        email:{
            required: true,
            email: true,

        },

        phone:{
            required: true,
            number: true,
            minlength: 6,
            maxlength: 25,

        },

        password:{
            required: true,
            regx: /^(([a-z0-9]*\d+[a-z]+[a-z0-9]*)|([a-z0-9]*[a-z]+\d+[a-z0-9]*))$/i,
            minlength: 6,
            maxlength: 12,
        }
    },

   messages:{

        first_name:{
            required: "Поле имя обязательно для заполнения",
            minlength: "Поле имя обязательно для заполнения",
            maxlength: "Введите действительное имя",
        },

        last_name:{
            required: "Поле фамилия обязательно для заполнения",
            minlength: "Поле фамилия обязательно для заполнения",
            maxlength: "Введите действительную фамилию",
        },

        email:{
            required: "Поле email обязательно для заполнения",
            email: "Поле email должно быть действительным электронным адресом",
        },

        phone:{
            required: "Поле телефон обязательно для заполнения",
            number: "Поле телефон должно быть числом",
            minlength: "Поле телефон должно быть не менее 6 символов",
            maxlength: "Введите действительный телефон",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },
        
        phonecc:{
            required: "Поле обязательно для заполнения",
        },

    }

});

