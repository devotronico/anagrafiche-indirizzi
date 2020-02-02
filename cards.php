<!-- <CARDS> -->
<div class="box-btn-center">
    <button class="btn btn-new btn-success btn-bd btn-bxsh">Aggiungi Nuovo Indirizzo<span class="btn-symbol">+</span></button>
</div>
<div id="cards" class="wrapper wrapper-3">
    <!-- <ADD> -->
    <div class="card indirizzi-add">
        <table class="card-table table-add">
            <tbody>
                <tr class="tr-add">
                    <th colspan="2" class="th-title th-add bg-color-1">
                        <div class="box-title box-title-add">
                            <h3 class="title txt-color-1">Aggiungi Indirizzo</h3>
                            <button class="btn btn-close btn-close-add">&#10006;</button>
                        </div>
                    </th>
                </tr>
                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Id Cliente</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-cliente_id" value="0" readonly>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Principale</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="checkbox" name="add-principale" id="add-principale">
                            <label for="add-principale" class="txt-color-2">SI</label>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Via/Corso...</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-via" placeholder="via,viale,corso,piazza..." pattern="[a-zA-Z\s]{2,100}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Civico</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-civico" placeholder="civico" pattern="[a-zA-Z0-9]{1,8}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Cap</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-cap" placeholder="cap" pattern="[0-9]{5}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Comune</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-comune" placeholder="comune" pattern="[a-zA-Z\s]{2,100}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Provincia</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-provincia" placeholder="provincia" pattern="[a-zA-Z]{2}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Nazione</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-add">
                            <input type="text" class="card-input card-input-add" id="add-nazione" placeholder="nazione" pattern="[a-zA-Z]{2}">
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-add">
                    <th class="th-add bg-color-1">
                        <p class="txt-color-1">Azione</p>
                    </th>
                    <td class="td-add bg-color-2">
                        <div class="box-btn box-btn-center">
                            <button class="btn btn-card-add btn-success btn-bd btn-bxsh" disabled>Aggiungi un nuovo Indirizzo</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- </ADD> -->


    <!-- <EDIT> -->
    <div class="card indirizzi-edit">
        <table class="card-table table-edit">
            <tbody>
                <tr class="tr-edit">
                    <th colspan="2" class="th-title th-edit bg-color-1">
                        <div class="box-title box-title-edit">
                            <h3 class="title txt-color-1">Modifica Indirizzo</h3><button class="btn btn-close btn-close-edit">&#10006;</button>
                        </div>
                    </th>
                </tr>
                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Id Indirizzo</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-add" id="edit-indirizzo_id" readonly>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Principale</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="checkbox" name="edit-principale" id="edit-principale">
                            <label for="edit-principale" class="txt-color-2">SI</label>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Via/Corso...</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-edit" id="edit-via" placeholder="via,viale,corso,piazza..." pattern="[a-zA-Z\s]{2,100}" title="I numeri non sono ammessi." required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Civico</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-edit" id="edit-civico" placeholder="civico" pattern="[a-zA-Z0-9]{1,8}?">
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Cap</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-edit" id="edit-cap" placeholder="cap" pattern="[0-9]{5}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Comune</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-edit" id="edit-comune" placeholder="comune" pattern="[a-zA-Z\s]{2,100}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Provincia</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-edit" id="edit-provincia" placeholder="provincia" pattern="[a-zA-Z]{2}" required>
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Nazione</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-edit">
                            <input type="text" class="card-input card-input-edit" id="edit-nazione" placeholder="nazione" pattern="[a-zA-Z]{2}">
                            <span class="validity"></span>
                        </div>
                    </td>
                </tr>

                <tr class="tr-edit">
                    <th class="th-edit bg-color-1">
                        <p class="txt-color-1">Azione</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-btn box-btn-center">
                            <button class="btn btn-card-update btn-warning btn-bd btn-bxsh" disabled>Salva Indirizzo Modificato</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- </EDIT> -->

    <!-- <VIEW> -->
    <div class="card indirizzi-view">
        <table class="card-table table-view">
            <tbody>
                <tr class="tr-view">
                    <th colspan="2" class="th-title th-view bg-color-1">
                        <div class="box-title box-title-view">
                            <h3 class="title txt-color-1">Mostra Indirizzo</h3><button class="btn btn-close btn-close-view">&#10006;</button>
                        </div>
                    </th>
                </tr>
                <tr class="tr-view">
                    <th class="th-view bg-color-1">
                        <p class="txt-color-1">Indirizzo<br>Completo</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-view">
                            <p class="view-address txt-color-2"></p>
                        </div>
                    </td>
                </tr>
                <tr class="tr-view">
                    <th class="th-view bg-color-1">
                        <p class="txt-color-1">Azione</p>
                    </th>
                    <td class="td-edit bg-color-2">
                        <div class="box-btn box-btn-center">
                            <button class="btn btn-card-map btn-primary btn-bd btn-bxsh">Cartina</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="map"></div>
    </div>
    <!-- </VIEW> -->
</div>
<!-- <CARDS> -->