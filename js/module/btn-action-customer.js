import { reqOnUserAction } from './req-on-user-action.js';
import { selectClienti } from '../index.js';


/*
validity: ValidityState
badInput: false
customError: false
patternMismatch: false
rangeOverflow: false
rangeUnderflow: false
stepMismatch: false
tooLong: false
tooShort: false
typeMismatch: false
valid: false
valueMissing: true
*/

// var obj = document.querySelector('#cognome').attributes; console.log(obj);
// var arr = Array.prototype.slice.call(obj);
// console.log(arr);

/**
 * Al click sul bottone 'Modifica il Cliente'
 * [a] il bottone 'edit' viene disabilitato e i bottoni 'save' e 'del' vengono abilitati
 * ---
 * <b> Vengono selezionati tutti gli elementi del form per abilitarli
 */
const editCustomer = () => {
    // https://www.w3schools.com/js/js_validation_api.asp


    // const cognome = document.querySelector('#cognome');
    // const isValidCognome = cognome.checkValidity();
    // if (isValidCognome) {
    //     console.log('OK-1');
    // } else {
    //     console.log('OK-2');
    // }



    // const listInput = document.querySelectorAll('.cliente-form-element');

    // document.querySelector('.btn-save-cliente').removeAttribute('disabled');
    // listInput.forEach(input => {
    //     console.log(input.validationMessage);
    //     const isValidEmail = input.checkValidity(); // console.log(isValidEmail);
    //     if (!isValidEmail || input.value == '') {
    //         console.log('OK-1');
    //         document.querySelector('.btn-save-cliente').disabled = true;
    //     } else { console.log('OK-2'); }
    // });



    // const listInvalidInput = document.querySelectorAll('.cliente-form-element:invalid'); // [a]
    // console.log(listInvalidInput);

    // if (listInvalidInput.length !== 0) { // [b]
    //     document.querySelector('.btn-save-cliente').disabled = true; // [b]
    // } else { // [c]
    //     document.querySelector('.btn-save-cliente').removeAttribute('disabled'); // [c]
    // }


    document.querySelector('.btn-edit-cliente').disabled = true; // [a]
    // document.querySelector('.btn-save-cliente').removeAttribute('disabled'); // [a]
    document.querySelector('.btn-del-cliente').removeAttribute('disabled'); // [a]
    // <b>
    const elements = document.querySelectorAll('.cliente-form-element');
    elements.forEach((element) => {
        if (element.id === 'genere') {
            element.removeAttribute('disabled');
        } else if (element.id !== 'id') {
            element.readOnly = false;
        }
    });
    // </b>
}


/**
 * Al click sul bottone 'Salva Modifiche al Cliente'
 * [a] Seleziona tutti gli elementi <input> e <select> del form dei clienti
 * [b] per ogni elemento trovato:
 *   [c] L' elemento <select> con id: 'genere' viene disabilitato
 *   [d] L' elemento <input> con id: diverso da 'id' vengono settati come di sola lettura
 *
 * <e> Prende tutti i valori del form del cliente per salvarli nel database
 * [f] i valori ottenuti vengono inseriti in un oggetto
 * [g] l'oggetto viene convertito in una stringa json
 * [h] Url della request
 * [i] funzione che fa una richiesta http al server per salvare i dati nel db
 * [l] dopo che i dati sono stati salvati
 *   [m] il bottone 'edit' viene abilitato e i bottoni 'save' e 'del' vengono disabilitati
 *   <n> l'elemento <option> della <select> viene aggiornato con con il nome e cognome appena salvati nel db
 */
const updateCustomer = () => {
    const elements = document.querySelectorAll('.cliente-form-element'); // [a]
    elements.forEach((element) => { // [b]
        if (element.id === 'genere') { // [c]
            element.disabled = true; // [c]
        } else if (element.id !== 'id') { // [d]
            element.readOnly = true; // [d]
        }
    });

    // <e>
    const idCliente = document.querySelector('#id').value;
    const genere = document.querySelector('#genere').value;

    let nome = document.querySelector('#nome').value;
    nome = nome.trim().split(' ').filter(Boolean).map(s => s.charAt(0).toUpperCase() + s.slice(1).toLowerCase()).join(' ');

    let cognome = document.querySelector('#cognome').value;
    cognome = cognome.trim().split(' ').filter(Boolean).map(s => s.charAt(0).toUpperCase() + s.slice(1).toLowerCase()).join(' ');

    const c_fiscale = document.querySelector('#c_fiscale').value;
    const p_iva = document.querySelector('#p_iva').value;
    const tel = document.querySelector('#tel').value;
    const email = document.querySelector('#email').value;
    // </e>
    const obj = { action: 'update', idCliente, genere, nome, cognome, c_fiscale, p_iva, tel, email }; // [f]

    const str = JSON.stringify(obj); // [g]
    const data = `data=${str}`; // [g]
    const url = 'action-on-customer'; // [h]
    reqOnUserAction(url, data) // [i]
        .then(res => {
            document.querySelector('.btn-edit-cliente').removeAttribute('disabled'); // [m]
            document.querySelector('.btn-save-cliente').disabled = true; // [m]
            document.querySelector('.btn-del-cliente').disabled = true; // [m]

            // <n>
            const arrayOfObjects = selectClienti.serialize();
            arrayOfObjects.forEach(obj => {
                if (obj.value == idCliente) {
                    obj.text = `${nome} - ${cognome}`;
                }
            });
            selectClienti.removeAll();
            selectClienti.add(arrayOfObjects);
            // </n>
        })
        .catch(err => console.log(err));
}

export { editCustomer, updateCustomer };