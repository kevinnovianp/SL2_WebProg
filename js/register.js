let id = (id) => document.getElementById(id)
        let classes = (classes) => document.getElementsByClassName(classes)
        let formRegister = id("formRegister"),
            namaDepan = id("namaDepan"),
            namaTengah = id("namaTengah"),
            namaBelakang = id("namaBelakang"),
            tempatLahir = id("tempatLahir"),
            tglLahir = id("tglLahir"),
            nik = id("nik"),
            wargaNegara = id("wargaNegara"),
            email = id("email"),
            noHP = id("noHP"),
            alamat = id("alamat"),
            kodePos = id("kodePos"),
            fotoProfil = id("fotoProfil"),
            username = id("username"),
            password1 = id("password1"),
            password2 = id("password2"),
            errorMsg = classes("errorMsg")
        
        let engine = (id,serial,isValid,message) => {
            errorMsg[serial].innerHTML = message
        }
        let tmp=0

        function validate(){
            tmp=0
            if(namaDepan.value.trim() === ""){
                engine(namaDepan,0,false,"Input can't be empty!")
                tmp+=1
            } else engine(namaDepan,0,true,"")

            if(namaTengah.value.trim() === ""){
                engine(namaDepan,1,false,"Input can't be empty!")
                tmp+=1
            } else engine(namaDepan,1,true,"")

            if(namaBelakang.value.trim() === ""){
                engine(namaDepan,2,false,"Input can't be empty!")
                tmp+=1
            } else engine(namaDepan,2,true,"")

            if(tempatLahir.value.trim() === ""){
                engine(tempatLahir,3,false,"Input can't be empty!")
                tmp+=1
            } else engine(tempatLahir,3,true,"")

            if(tglLahir.value.trim() === ""){
                engine(tglLahir,4,false,"Input can't be empty!")
                tmp+=1
            } else if(new Date(tglLahir.value) >= new Date()) {
                engine(tglLahir,4,false,"Input can't be equal or greater than current date!")
                tmp+=1
            } else{
                engine(tglLahir,4,true,"")   
            }
        
            if(nik.value.trim() === ""){
                engine(nik,5,false,"Input can't be empty!")
                tmp+=1
            } else if(nik.value.match(/^[0-9]+$/)==null || nik.value.length != 16){
                engine(nik,5,false,"Input must be 16 digits!")
                tmp+=1
            } else engine(nik,5,true,"")
            
            if(wargaNegara.value.trim() === ""){
                engine(wargaNegara,6,false,"Input can't be empty!")
                tmp+=1
            } else engine(wargaNegara,6,true,"")
            
            if(email.value.trim() === ""){
                engine(email,7,false,"Input can't be empty!")
                tmp+=1
            } else if(!email.value.endsWith("@gmail.com")){
                engine(email,7,false,"Input must ended with @gmail.com!")
                tmp+=1
            } else engine(email,7,true,"")

            if(noHP.value.trim() === ""){
                engine(noHP,8,false,"Input can't be empty!")
                tmp+=1
            } else if(noHP.value.match(/^[0-9]+$/)==null || noHP.value.length != 12){
                engine(noHP,8,false,"Input must be 12 digits!")
                tmp+=1
            } else engine(noHP,8,true,"")

            if(alamat.value.trim() === ""){
                engine(alamat,9,false,"Input can't be empty!")
                tmp+=1
            } else if(!alamat.value.startsWith("Jln.")){
                engine(alamat,9,false,"Input must started with Jln.!")
                tmp+=1
            } else engine(alamat,9,true,"")

            if(kodePos.value.trim() === ""){
                engine(kodePos,10,false,"Input can't be empty!")
                tmp+=1
            } else if(kodePos.value.match(/^[0-9]+$/)==null || kodePos.value.length < 5){
                engine(kodePos,10,false,"Input must be at least 5 digits!")
                tmp+=1
            } else engine(kodePos,10,true,"")

            if(fotoProfil.value.trim() === ""){
                engine(fotoProfil,11,false,"Input can't be empty!")
                tmp+=1
            } else{
                var path = fotoProfil.value
                var ext = path.substring(path.lastIndexOf('.')+1).toLowerCase()
                if(!(ext == "png" || ext == "jpg" || ext == "jpeg")){
                    engine(fotoProfil,11,false,"Input format must be .png, .jpg, or .jpeg!")
                    tmp+=1
                }
                else engine(fotoProfil,11,true,"")
            }

            if(username.value.trim() === ""){
                engine(username,12,false,"Input can't be empty!")
                tmp+=1
            } else if(username.value.length < 5){
                engine(username,12,false,"Input must be at least 5 characters!")
                tmp+=1
            }else engine(username,12,true,"")

            if(password1.value.trim() === ""){
                engine(password1,13,false,"Input can't be empty!")
                tmp+=1
            } else if(password1.value.length < 8){
                engine(password1,13,false,"Input must be at least 8 characters!")
                tmp+=1
            } else engine(password1,13,true,"")

            if(password2.value.trim() === ""){
                engine(password2,14,false,"Input can't be empty!")
                tmp+=1
            } else if(password2.value != password1.value){
                engine(password2,14,false,"Input must be same as password 1!")
                tmp+=1
            } else engine(password2,14,true,"")
        }

        function submitForm(){
            tmp=0
            validate()
            if(tmp==0){
                formRegister.submit()
            }
            else{
                returnToPreviousPage()
                return false
            }
        }
        
        function back(){
            location = "./welcome.php"
        }