// validator input

$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, 'Пароль должен быть длиной от 6 до 12 символов, включая буквы (A-Z, a-z) и цифры (0-9). Без специальных символов (^@()_#*+/ \\"?!=.{}~`&) и без пробелов.');

// validation form1
$("#bigForm1").validate({

    rules:{

        first_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
        },

        last_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
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

        phonecc:{
            required: true,
        },


        password:{
            required: true,
            regx: /^\w*(?=\w*\d)(?=\w*[a-zA-z])\w*$/m,
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

        phonecc:{
            required: "Поле обязательно для заполнения",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },

    }

});

// validation form2
$("#bigForm2").validate({

    rules:{

        first_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
        },

        last_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
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

        phonecc:{
            required: true,
        },

        password:{
            required: true,
            regx: /^\w*(?=\w*\d)(?=\w*[a-zA-z])\w*$/m,
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

        phonecc:{
            required: "Поле обязательно для заполнения",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },

    }

});

// validation form3
$("#bigForm3").validate({

    rules:{

        first_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
        },

        last_name:{
            required: true,
            minlength: 1,
            maxlength: 64,
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

        phonecc:{
            required: true,
        },

        password:{
            required: true,
            regx: /^\w*(?=\w*\d)(?=\w*[a-zA-z])\w*$/m,
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

        phonecc:{
            required: "Поле обязательно для заполнения",
        },

        password:{
            required: "Поле пароль обязательно для заполнения",
            minlength: "Поле пароль должно быть не менее 6 символов",
            maxlength: "Поле пароль должно быть не более 12 символов",
        },

    }

});