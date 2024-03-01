<?php 


Class Validar
{
   public static function  validarNome($nome)
   {
        if(!preg_match('/^([áÁàÀãÃâÂéÉèÈíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/',$nome))
        {
             return true;
        }else{
            return false;
        }
   }
    public  static function validarEmail($email)
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
             return true;
        }else{
            return false;
        }
    }
}