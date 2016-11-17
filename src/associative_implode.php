<?php

if(!function_exists('associative_implode'))
{
    /**
     * Implode an associative array.
     * 
     * Character between key and value.
     * @param string $glue
     * 
     * Character between each array segment
     * @param string $separator
     * 
     * Array to implode
     * @param array $array
     * 
     * Place a quote around keys
     * @param bool $quoteKeys
     * 
     * Place a quote around values
     * @param bool $quoteValues
     * 
     * Character to use to quote
     * @param string $quote
     * 
     * @return string
     */
    function associative_implode($glue, $separator, array $array, $quoteKeys = false, $quoteValues = true, $quote = '"')
    {
        $keyQuote = $quoteKeys ? $quote : '';
        $valQuote = $quoteValues ? $quote : '';

        return implode($separator, 
            array_map(
                function ($key, $value) use ($glue, $keyQuote, $valQuote)
                {
                    return $keyQuote . $key . $keyQuote . $glue . $valQuote . $value . $valQuote;
                },
                array_keys($array),
                array_values($array)
            )    
        );
    }
}

