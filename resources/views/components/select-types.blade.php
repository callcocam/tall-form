@props(['field'])
<select
    {{ $attributes->class('orm-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent')->merge($field->attributes) }}>
    <option>--Selecione--</option>
    <option value="INT"
        title="Um inteiro de 4 byte, a gama atribuída é de -2,147,483,648 a 2,147,483,647, a gama não atribuída é de 0 a 4,294,967,295">
        INT</option>
    <option value="VARCHAR" selected="selected"
        title="Uma cadeia de comprimento variável (0-65,535), o comprimento efetivo máximo está sujeito ao tamanho máximo de linha">
        VARCHAR</option>
    <option value="TEXT"
        title="Uma coluna de texto com um comprimento máximo de 65.535 (2^16 - 1) caracteres, guardada com um prefixo de dois bytes indicando o comprimento do valor em bytes">
        TEXT</option>
    <option value="DATE" title="Uma data, intervalo suportado é 1000-01-01 até 9999-12-31">DATE</option>
    <optgroup label="Numérico">
        <option value="TINYINT"
            title="Um inteiro de 1 byte, a gama atribuída é de -128 a 127, a gama não atribuída é de 0 a 255">
            TINYINT</option>
        <option value="SMALLINT"
            title="Um inteiro de 2 byte, a gama atribuída é de -32,768 a 32,767, a gama não atribuída é de 0 a 65,535">
            SMALLINT</option>
        <option value="MEDIUMINT"
            title="Um inteiro de 3 byte, a gama atribuída é de -8,388,608 a 8,388,607, a gama não atribuída é de 0 a 16,777,215">
            MEDIUMINT</option>
        <option value="INT"
            title="Um inteiro de 4 byte, a gama atribuída é de -2,147,483,648 a 2,147,483,647, a gama não atribuída é de 0 a 4,294,967,295">
            INT</option>
        <option value="BIGINT"
            title="Um inteiro de 8 byte, a gama atribuída é de -9,223,372,036,854,775,808 a 9,223,372,036,854,775,807, a gama não atribuída é de 0 a 18,446,744,073,709,551,615">
            BIGINT</option>
        <option disabled="disabled">-</option>
        <option value="DECIMAL"
            title="Um número de ponto fixo (M, D), a quantidade máxima de dígitos (M) é de 65 (por predefinição 10), a quantidade máxima de decimais (D) é de 30 (por predefinição 0)">
            DECIMAL</option>
        <option value="FLOAT"
            title="Um pequeno número de ponto flutuante, os valores permitidos são -3.402823466E+38 a -1.175494351E-38, 0 e 1.175494351E-38 a 3.402823466E+38">
            FLOAT</option>
        <option value="DOUBLE"
            title="Um número de ponto flutuante com dupla precisão, os valores permitidos são -1.7976931348623157E+308 a -2.2250738585072014E-308, 0 e 2.2250738585072014E-308 a 1.7976931348623157E+308">
            DOUBLE</option>
        <option value="REAL" title="Sinónimo para DOUBLE (excepção: no modo SQL REAL_AS_FLOAT é sinónimo para FLOAT)">
            REAL</option>
        <option disabled="disabled">-</option>
        <option value="BIT"
            title="Um tipo de campo bit (M), armazena M de bits por valor (a predefinição é 1 e o máximo é 64)">
            BIT</option>
        <option value="BOOLEAN"
            title="Um sinónimo para TINYINT(1), um valor de zero é considerado falso, valores diferentes de zero são considerados verdadeiros">
            BOOLEAN</option>
        <option value="SERIAL" title="Um alias para BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE">SERIAL
        </option>
    </optgroup>
    <optgroup label="Data e hora">
        <option value="DATE" title="Uma data, intervalo suportado é 1000-01-01 até 9999-12-31">DATE
        </option>
        <option value="DATETIME"
            title="Uma combinação de data e hora, o intervalo suportado é 1000-01-01 00:00:00 até 9999-12-31 23:59:59">
            DATETIME</option>
        <option value="TIMESTAMP"
            title="Um carimbo temporal, intervalo é desde 1970-01-01 00:00:01 UTC até 2038-01-09 03:14:07 UTC, guardado como um número de segundos desde a época (1970-01-01 00:00:00 UTC)">
            TIMESTAMP</option>
        <option value="TIME" title="Uma hora, intervalo é -838:59:59 até 838:59:59">
            TIME</option>
        <option value="YEAR"
            title="Um ano no formato de quatro dígitos (4, predefinição) ou de dois dígitos (2), os valores permitidos são de 70 (1970) até 69 (2069) ou 1901 até 2155 e 0000">
            YEAR</option>
    </optgroup>
    <optgroup label="Cadeia">
        <option value="CHAR"
            title="Uma cadeia de caracteres de comprimento fixo (0-255, predefinição 1) que é sempre preenchida à direita com espaços até o tamanho especificado quando armazenado">
            CHAR</option>
        <option value="VARCHAR" selected="selected"
            title="Uma cadeia de comprimento variável (0-65,535), o comprimento efetivo máximo está sujeito ao tamanho máximo de linha">
            VARCHAR</option>
        <option disabled="disabled">-</option>
        <option value="TINYTEXT"
            title="Uma coluna de texto com um comprimento máximo de 255 (2^8 - 1) caracteres, guardados com um prefixo de um byte indicando o comprimento do valor em bytes">
            TINYTEXT</option>
        <option value="TEXT"
            title="Uma coluna de texto com um comprimento máximo de 65.535 (2^16 - 1) caracteres, guardada com um prefixo de dois bytes indicando o comprimento do valor em bytes">
            TEXT</option>
        <option value="MEDIUMTEXT"
            title="Uma coluna de texto com um comprimento máximo de 16.777.215 (2^24 - 1) caracteres, guardada com um prefixo de três bytes que indica o comprimento do valor em bytes">
            MEDIUMTEXT</option>
        <option value="LONGTEXT"
            title="Uma coluna de texto com um comprimento máximo de 4.294.967.295 ou 4Gb (2^32 - 1) caracteres, guardada com um prefixo de quatro bytes que indica o comprimento do valor em bytes">
            LONGTEXT</option>
        <option disabled="disabled">-</option>
        <option value="BINARY"
            title="Semelhante ao tipo CHAR, mas armazena cadeias de bytes binários em vez de cadeias de caracteres não-binários">
            BINARY</option>
        <option value="VARBINARY"
            title="Semelhante ao tipo VARCHAR, mas armazena cadeias de bytes binários em vez de cadeias de caracteres não-binários">
            VARBINARY</option>
        <option disabled="disabled">-</option>
        <option value="TINYBLOB"
            title="Uma coluna tipo BLOB com um comprimento máximo de 255 (2^8 - 1) bytes, armazenada com um prefixo de um byte indicando o comprimento do valor">
            TINYBLOB</option>
        <option value="BLOB"
            title="Uma coluna tipo BLOB com um comprimento máximo de 65.535 (2^16 - 1) bytes, armazenada com um prefixo de dois byte indicando o comprimento do valor">
            BLOB</option>
        <option value="MEDIUMBLOB"
            title="Uma coluna do tipo BLOB com um comprimento máximo de 16.777.215 (2^24 - 1) bytes, armazenada com um prefixo de três bytes que indica o comprimento do valor">
            MEDIUMBLOB</option>
        <option value="LONGBLOB"
            title="Uma coluna BLOB com um comprimento máximo de 4.294.967.295 ou 4GB (2^32 - 1) bytes, armazenados com um prefixo de quatro bytes indicando o comprimento do valor">
            LONGBLOB</option>
        <option disabled="disabled">-</option>
        <option value="ENUM"
            title="Uma enumeração, escolhida a partir da lista de até 65.535 valores ou o valor especial '' do erro">
            ENUM</option>
        <option value="SET" title="Um valor único escolhido de um conjunto de até 64 membros">SET
        </option>
    </optgroup>
    <optgroup label="Espacial">
        <option value="GEOMETRY" title="Um tipo que pode armazenar uma geometria de qualquer tipo">GEOMETRY
        </option>
        <option value="POINT" title="Um ponto no espaço de 2 dimensões">
            POINT</option>
        <option value="LINESTRING" title="Uma curva com uma interpolação linear entre os pontos">LINESTRING
        </option>
        <option value="POLYGON" title="Um polígono">POLYGON</option>
        <option value="MULTIPOINT" title="Uma coleção de pontos">MULTIPOINT
        </option>
        <option value="MULTILINESTRING" title="Uma coleção de curvas com uma interpolação linear entre os pontos">
            MULTILINESTRING</option>
        <option value="MULTIPOLYGON" title="Uma coleção de polígonos">
            MULTIPOLYGON</option>
        <option value="GEOMETRYCOLLECTION" title="Uma coleção de objetos geométricos de qualquer tipo">
            GEOMETRYCOLLECTION</option>
    </optgroup>
    <optgroup label="JSON">
        <option value="JSON"
            title="Armazena e ativa acesso eficiente a dados em documentos JSON (Notação de Objectos em JavaScript)">
            JSON</option>
    </optgroup>
</select>
