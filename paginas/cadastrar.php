
 <?php include ("navbar.php")?>
<div id="central">
    <div class="errors-messages"> </div>

    <div class="form-inscricao">
        <form action="/inscreva-se/register" method="post" enctype="application/x-www-form-urlencoded" id="inscreva_se"><fieldset>
<div id="first-step" class="block-container"><div id="field-reg_cpf" class="control-inline-group"><label class="form_label optional" for="reg_cpf">Digite aqui seu CPF</label>

<input type="text" value="" id="reg_cpf" name="reg_cpf">

<button type="button" id="cod_assinante_ok" name="cod_assinante_ok">OK</button></div></div>
<div id="second-step" class="block-container"><div id="field-reg_email" class="option-block"><label class="required" for="reg_email">Email</label>

<input type="text" value="" id="reg_email" name="reg_email"></div>
<div id="field-reg_confirm_email" class="option-block"><label class="required" for="reg_confirm_email">Confirmação de email</label>

<input type="text" value="" id="reg_confirm_email" name="reg_confirm_email"></div>

<div id="password" class="block-container"><div id="field-reg_password" class="option-block"><label class="required" for="reg_password">Senha</label>

<input type="password" value="" id="reg_confirm_password" name="reg_confirm_password"></div>

<div id="field-birth_day" class="control-inline-group"><label class="form_label required" for="birth_day">Data de nascimento</label>

<select id="birth_day" name="birth_day">
    <option label="-" value="">-</option>
    <option label="01" value="1">01</option>
    <option label="02" value="2">02</option>
    <option label="03" value="3">03</option>
    <option label="04" value="4">04</option>
    <option label="05" value="5">05</option>
    <option label="06" value="6">06</option>
    <option label="07" value="7">07</option>
    <option label="08" value="8">08</option>
    <option label="09" value="9">09</option>
    <option label="10" value="10">10</option>
    <option label="11" value="11">11</option>
    <option label="12" value="12">12</option>
    <option label="13" value="13">13</option>
    <option label="14" value="14">14</option>
    <option label="15" value="15">15</option>
    <option label="16" value="16">16</option>
    <option label="17" value="17">17</option>
    <option label="18" value="18">18</option>
    <option label="19" value="19">19</option>
    <option label="20" value="20">20</option>
    <option label="21" value="21">21</option>
    <option label="22" value="22">22</option>
    <option label="23" value="23">23</option>
    <option label="24" value="24">24</option>
    <option label="25" value="25">25</option>
    <option label="26" value="26">26</option>
    <option label="27" value="27">27</option>
    <option label="28" value="28">28</option>
    <option label="29" value="29">29</option>
    <option label="30" value="30">30</option>
    <option label="31" value="31">31</option>
</select>

<select id="birth_month" name="birth_month">
    <option label="-" value="">-</option>
    <option label="01" value="1">01</option>
    <option label="02" value="2">02</option>
    <option label="03" value="3">03</option>
    <option label="04" value="4">04</option>
    <option label="05" value="5">05</option>
    <option label="06" value="6">06</option>
    <option label="07" value="7">07</option>
    <option label="08" value="8">08</option>
    <option label="09" value="9">09</option>
    <option label="10" value="10">10</option>
    <option label="11" value="11">11</option>
    <option label="12" value="12">12</option>
</select>

<select id="birth_year" name="birth_year">
    <option label="-" value="">-</option>
    <option label="1995" value="1995">1995</option>
    <option label="1994" value="1994">1994</option>
    <option label="1993" value="1993">1993</option>
    <option label="1992" value="1992">1992</option>
    <option label="1991" value="1991">1991</option>
    <option label="1990" value="1990">1990</option>
    <option label="1989" value="1989">1989</option>
    <option label="1988" value="1988">1988</option>
    <option label="1987" value="1987">1987</option>
    <option label="1986" value="1986">1986</option>
    <option label="1985" value="1985">1985</option>
    <option label="1984" value="1984">1984</option>
    <option label="1983" value="1983">1983</option>
    <option label="1982" value="1982">1982</option>
    <option label="1981" value="1981">1981</option>
    <option label="1980" value="1980">1980</option>
    <option label="1979" value="1979">1979</option>
    <option label="1978" value="1978">1978</option>
    <option label="1977" value="1977">1977</option>
    <option label="1976" value="1976">1976</option>
    <option label="1975" value="1975">1975</option>
    <option label="1974" value="1974">1974</option>
    <option label="1973" value="1973">1973</option>
    <option label="1972" value="1972">1972</option>
    <option label="1971" value="1971">1971</option>
    <option label="1970" value="1970">1970</option>
    <option label="1969" value="1969">1969</option>
    <option label="1968" value="1968">1968</option>
    <option label="1967" value="1967">1967</option>
    <option label="1966" value="1966">1966</option>
    <option label="1965" value="1965">1965</option>
    <option label="1964" value="1964">1964</option>
    <option label="1963" value="1963">1963</option>
    <option label="1962" value="1962">1962</option>
    <option label="1961" value="1961">1961</option>
    <option label="1960" value="1960">1960</option>
    <option label="1959" value="1959">1959</option>
    <option label="1958" value="1958">1958</option>
    <option label="1957" value="1957">1957</option>
    <option label="1956" value="1956">1956</option>
    <option label="1955" value="1955">1955</option>
    <option label="1954" value="1954">1954</option>
    <option label="1953" value="1953">1953</option>
    <option label="1952" value="1952">1952</option>
    <option label="1951" value="1951">1951</option>
    <option label="1950" value="1950">1950</option>
    <option label="1949" value="1949">1949</option>
    <option label="1948" value="1948">1948</option>
    <option label="1947" value="1947">1947</option>
    <option label="1946" value="1946">1946</option>
    <option label="1945" value="1945">1945</option>
    <option label="1944" value="1944">1944</option>
    <option label="1943" value="1943">1943</option>
    <option label="1942" value="1942">1942</option>
    <option label="1941" value="1941">1941</option>
    <option label="1940" value="1940">1940</option>
    <option label="1939" value="1939">1939</option>
    <option label="1938" value="1938">1938</option>
    <option label="1937" value="1937">1937</option>
    <option label="1936" value="1936">1936</option>
    <option label="1935" value="1935">1935</option>
    <option label="1934" value="1934">1934</option>
    <option label="1933" value="1933">1933</option>
    <option label="1932" value="1932">1932</option>
    <option label="1931" value="1931">1931</option>
    <option label="1930" value="1930">1930</option>
    <option label="1929" value="1929">1929</option>
    <option label="1928" value="1928">1928</option>
    <option label="1927" value="1927">1927</option>
    <option label="1926" value="1926">1926</option>
    <option label="1925" value="1925">1925</option>
    <option label="1924" value="1924">1924</option>
    <option label="1923" value="1923">1923</option>
    <option label="1922" value="1922">1922</option>
    <option label="1921" value="1921">1921</option>
    <option label="1920" value="1920">1920</option>
    <option label="1919" value="1919">1919</option>
    <option label="1918" value="1918">1918</option>
    <option label="1917" value="1917">1917</option>
    <option label="1916" value="1916">1916</option>
    <option label="1915" value="1915">1915</option>
    <option label="1914" value="1914">1914</option>
    <option label="1913" value="1913">1913</option>
</select></div>
<div id="field-reg_tel_prefix_celular" class="control-inline-group"><label class="form_label required" for="reg_tel_prefix_celular">Tel Celular</label>

<input type="text" value="" id="reg_tel_prefix_celular" name="reg_tel_prefix_celular">

<input type="text" value="" id="reg_tel_celular" name="reg_tel_celular"></div>
<div id="field-reg_tel_prefix_residencial" class="control-inline-group"><label class="form_label optional" for="reg_tel_prefix_residencial">Tel Residencial</label>

<input type="text" value="" id="reg_tel_prefix_residencial" name="reg_tel_prefix_residencial">

<input type="text" value="" id="reg_tel_residencial" name="reg_tel_residencial"></div>
<div id="field-reg_tel_prefix_comercial" class="control-inline-group"><label class="form_label optional" for="reg_tel_prefix_comercial">Tel Comercial</label>

<input type="text" value="" id="reg_tel_prefix_comercial" name="reg_tel_prefix_comercial">

<label class="required" for="how_to_know">Como descobriu o site?</label>

<select id="how_to_know" name="how_to_know">
    <option label="-" value="">-</option>
    <option label="Sabendo." value="1">Sabendo.</option>
</select></div>
<div id="field-receive_promotion" class="option-block"><label class="optional" for="receive_promotion">Autorizo receber informações por email e SMS</label>

<input type="hidden" value="0" name="receive_promotion"><input type="checkbox" checked="checked" value="1" id="receive_promotion" name="receive_promotion"></div>
<div id="field-agree" class="option-block"><label class="required" for="agree">Li e concordo com o regulamento*</label>

<input type="hidden" value="" name="agree"><input type="checkbox" value="1" id="agree" name="agree"></div>

<input type="submit" value="ENVIAR CADASTRO" id="register" name="register"></div></fieldset></form>    </div>
</div>