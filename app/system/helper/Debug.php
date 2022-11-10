<?

namespace System\Helper;

class Debug
{
    public static function varDump(...$var)
    {

        $debugCallData = "\n[file]: " . debug_backtrace()[1]['file'] . "\n[line]: " . debug_backtrace()[1]['line'] . "\n[call]: " . debug_backtrace()[1]['function']  . "\n";

        // print_r(debug_backtrace()[1], true);
        print('<pre>'. $debugCallData);
        
        foreach ($var as $v)
            var_dump($v);
        print('</pre>');
    }
}
