<div class="pure-g">
<div class="pure-u-1-1">
   <table style="margin: auto;" id="tab_nazw" class="pure-table pure-table-bordered pure-form pure-form-align">
        <thead>
            <tr>
                <tr><th colspan="5">Dostępne książki</th></tr>
                <th>Id książki</th>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Wydawnictwo</th>
                <th>Cena</th>
            </tr>           
        </thead>
        <tbody>
            {foreach $names as $n}
                {strip}
                    <tr>
                        <td>{$n["id_ksiazki"]}</td>
                        <td>{$n["autor"]}</td>
                        <td>{$n["tytul"]}</td>
                        <td>{$n["wydawnictwo"]}</td>
                        <td>{$n["cena"]}</td>
                        <td>
                            <a class="button-small pure-button button-secondary" href="{$conf->action_url}bookEdit/{$n['id_ksiazki']}">Dodaj do koszyka</a>
                                &nbsp;
                        </td>
                    </tr>
                {/strip}
            {/foreach}
        </tbody>
    </table>
</div>

</div>
        
