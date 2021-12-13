const btn = document.querySelector('#btn');
        // handle button click
        btn.onclick = function () {
            const rbs = document.querySelectorAll('input[name="choice"]');
            let selectedValue;
            for (const rb of rbs) {
                if (rb.checked) {
                    selectedValue = rb.value;
                    break;
                }
            }
            if(selectedValue==1){
            window.location.href = "./ajouterRec_note.php?Id_reclamation="+selectedValue;}
            if(selectedValue==2){
            window.location.href = "./ajouterAbsence.php?Id_reclamation="+selectedValue;}
            if(selectedValue==3){
            window.location.href = "./ajouterRec_autre.php?Id_reclamation="+selectedValue;}
        };