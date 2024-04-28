
                    function validateForm() {
                        var num1 = document.getElementById("num1").value;
                        var num2 = document.getElementById("num2").value;

                        if (num1 == "" || num2 == "") {
                            alert (" Por favor, preencha todos os campos.");
                            return false;
                        }
                        return true;
                    }
              