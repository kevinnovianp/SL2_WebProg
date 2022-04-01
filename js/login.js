let id = (id) => document.getElementById(id)
        let formLogin = id("formLogin"),
            username = id("username"),
            password = id("password"),
            errorMsg = id("errorMsg")

        function validate(){
            if(username.value.trim() === "" || password.value.trim() === ""){
                errorMsg.innerHTML = "* Username and Password must be filled!"
                return false
            }
            errorMsg.innerHTML = ""
            return true
        }

        function submitForm(){
            if(validate()){
                formLogin.submit()
            } else{
                returnToPreviousPage()
                return false
            }
        }

        function back(){
            location = "./welcome.php"
        }