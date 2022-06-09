function calcAvg(){
        let result = parseInt(document.getElementById('math').value) +parseInt(document.getElementById('eng').value) +parseInt(document.getElementById('phy').value) +parseInt(document.getElementById('chem').value) +parseInt(document.getElementById('cs').value);
        result=(result/50)*100;
        document.getElementById('pa2').value = result;
        
    }