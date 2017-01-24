<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Mime;

use Zend\Mail\Headers;
use Zend\Stdlib\ErrorHandler;

class Decode
{
    /**
     * Explode MIME multipart string into separate parts
     *
     * Parts consist of the header and the body of each MIME part.
     *
     * @param  string $body     raw body of message
     * @param  string $boundary boundary as found in content-type
     * @return array parts with content of each part, empty if no parts found
     * @throws Exception\RuntimeException
     */
    public static function splitMime($body, $boundary)
    {
        // TODO: we're ignoring \r for now - is this function fast enough and is it safe to assume noone needs \r?
        $body = str_replace("\r", '', $body);

        $start = 0;
        $res = [];
        // find every mime part limiter and cut out the
        // string before it.
        // the part before the first boundary string is discarded:
        $p = strpos($body, '--' . $boundary . "\n", $start);
        if ($p === false) {
            // no parts found!
            return [];
        }

        // position after first boundary line
        $start = $p + 3 + strlen($boundary);

        while (($p = strpos($body, '--' . $boundary . "\n", $start)) !== false) {
<<<<<<< HEAD
            $res[] = substr($body, $start, $p - $start);
=======
<<<<<<< HEAD
            $res[] = substr($body, $start, $p - $start);
=======
            $res[] = substr($body, $start, $p-$start);
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
            $start = $p + 3 + strlen($boundary);
        }

        // no more parts, find end boundary
        $p = strpos($body, '--' . $boundary . '--', $start);
<<<<<<< HEAD
        if ($p === false) {
=======
<<<<<<< HEAD
        if ($p === false) {
=======
        if ($p===false) {
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
            throw new Exception\RuntimeException('Not a valid Mime Message: End Missing');
        }

        // the remaining part also needs to be parsed:
<<<<<<< HEAD
        $res[] = substr($body, $start, $p - $start);
=======
<<<<<<< HEAD
        $res[] = substr($body, $start, $p - $start);
=======
        $res[] = substr($body, $start, $p-$start);
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
        return $res;
    }

    /**
     * decodes a mime encoded String and returns a
     * struct of parts with header and body
     *
     * @param  string $message  raw message content
     * @param  string $boundary boundary as found in content-type
     * @param  string $EOL EOL string; defaults to {@link Zend\Mime\Mime::LINEEND}
     * @return array|null parts as array('header' => array(name => value), 'body' => content), null if no parts found
     * @throws Exception\RuntimeException
     */
    public static function splitMessageStruct($message, $boundary, $EOL = Mime::LINEEND)
    {
        $parts = static::splitMime($message, $boundary);
        if (count($parts) <= 0) {
            return;
        }
        $result = [];
        $headers = null; // "Declare" variable before the first usage "for reading"
        $body    = null; // "Declare" variable before the first usage "for reading"
        foreach ($parts as $part) {
            static::splitMessage($part, $headers, $body, $EOL);
            $result[] = ['header' => $headers,
                              'body'   => $body    ];
        }
        return $result;
    }

    /**
     * split a message in header and body part, if no header or an
     * invalid header is found $headers is empty
     *
     * The charset of the returned headers depend on your iconv settings.
     *
     * @param  string|Headers  $message raw message with header and optional content
     * @param  Headers         $headers output param, headers container
     * @param  string          $body    output param, content of message
     * @param  string          $EOL EOL string; defaults to {@link Zend\Mime\Mime::LINEEND}
     * @param  bool         $strict  enable strict mode for parsing message
     * @return null
     */
    public static function splitMessage($message, &$headers, &$body, $EOL = Mime::LINEEND, $strict = false)
    {
        if ($message instanceof Headers) {
            $message = $message->toString();
        }
        // check for valid header at first line
        $firstlinePos = strpos($message, "\n");
        $firstline = $firstlinePos === false ? $message : substr($message, 0, $firstlinePos);
<<<<<<< HEAD
        if (! preg_match('%^[^\s]+[^:]*:%', $firstline)) {
=======
<<<<<<< HEAD
        if (! preg_match('%^[^\s]+[^:]*:%', $firstline)) {
=======
        if (!preg_match('%^[^\s]+[^:]*:%', $firstline)) {
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
            $headers = [];
            // TODO: we're ignoring \r for now - is this function fast enough and is it safe to assume noone needs \r?
            $body = str_replace(["\r", "\n"], ['', $EOL], $message);
            return;
        }

        // see @ZF2-372, pops the first line off a message if it doesn't contain a header
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
        if (! $strict) {
            $parts = explode(':', $firstline, 2);
            if (count($parts) != 2) {
                $message = substr($message, strpos($message, $EOL) + 1);
<<<<<<< HEAD
=======
=======
        if (!$strict) {
            $parts = explode(':', $firstline, 2);
            if (count($parts) != 2) {
                $message = substr($message, strpos($message, $EOL)+1);
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
            }
        }

        // find an empty line between headers and body
        // default is set new line
        if (strpos($message, $EOL . $EOL)) {
            list($headers, $body) = explode($EOL . $EOL, $message, 2);
        // next is the standard new line
        } elseif ($EOL != "\r\n" && strpos($message, "\r\n\r\n")) {
            list($headers, $body) = explode("\r\n\r\n", $message, 2);
        // next is the other "standard" new line
        } elseif ($EOL != "\n" && strpos($message, "\n\n")) {
            list($headers, $body) = explode("\n\n", $message, 2);
        // at last resort find anything that looks like a new line
        } else {
<<<<<<< HEAD
            ErrorHandler::start(E_NOTICE | E_WARNING);
=======
<<<<<<< HEAD
            ErrorHandler::start(E_NOTICE | E_WARNING);
=======
            ErrorHandler::start(E_NOTICE|E_WARNING);
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
            list($headers, $body) = preg_split("%([\r\n]+)\\1%U", $message, 2);
            ErrorHandler::stop();
        }

        $headers = Headers::fromString($headers, $EOL);
    }

    /**
     * split a content type in its different parts
     *
     * @param  string $type       content-type
     * @param  string $wantedPart the wanted part, else an array with all parts is returned
     * @return string|array wanted part or all parts as array('type' => content-type, partname => value)
     */
    public static function splitContentType($type, $wantedPart = null)
    {
        return static::splitHeaderField($type, $wantedPart, 'type');
    }

    /**
     * split a header field like content type in its different parts
     *
     * @param  string $field      header field
     * @param  string $wantedPart the wanted part, else an array with all parts is returned
     * @param  string $firstName  key name for the first part
     * @return string|array wanted part or all parts as array($firstName => firstPart, partname => value)
     * @throws Exception\RuntimeException
     */
    public static function splitHeaderField($field, $wantedPart = null, $firstName = '0')
    {
        $wantedPart = strtolower($wantedPart);
        $firstName = strtolower($firstName);

        // special case - a bit optimized
        if ($firstName === $wantedPart) {
            $field = strtok($field, ';');
            return $field[0] == '"' ? substr($field, 1, -1) : $field;
        }

        $field = $firstName . '=' . $field;
<<<<<<< HEAD
        if (! preg_match_all('%([^=\s]+)\s*=\s*("[^"]+"|[^;]+)(;\s*|$)%', $field, $matches)) {
=======
<<<<<<< HEAD
        if (! preg_match_all('%([^=\s]+)\s*=\s*("[^"]+"|[^;]+)(;\s*|$)%', $field, $matches)) {
=======
        if (!preg_match_all('%([^=\s]+)\s*=\s*("[^"]+"|[^;]+)(;\s*|$)%', $field, $matches)) {
>>>>>>> 9e597b830b24a7ed49a96571d7cbd3e7c9354bbf
>>>>>>> ef836af1c19acf10be67bee3f6905098cd8947c5
            throw new Exception\RuntimeException('not a valid header field');
        }

        if ($wantedPart) {
            foreach ($matches[1] as $key => $name) {
                if (strcasecmp($name, $wantedPart)) {
                    continue;
                }
                if ($matches[2][$key][0] != '"') {
                    return $matches[2][$key];
                }
                return substr($matches[2][$key], 1, -1);
            }
            return;
        }

        $split = [];
        foreach ($matches[1] as $key => $name) {
            $name = strtolower($name);
            if ($matches[2][$key][0] == '"') {
                $split[$name] = substr($matches[2][$key], 1, -1);
            } else {
                $split[$name] = $matches[2][$key];
            }
        }

        return $split;
    }

    /**
     * decode a quoted printable encoded string
     *
     * The charset of the returned string depends on your iconv settings.
     *
     * @param  string $string encoded string
     * @return string decoded string
     */
    public static function decodeQuotedPrintable($string)
    {
        return iconv_mime_decode($string, ICONV_MIME_DECODE_CONTINUE_ON_ERROR, 'UTF-8');
    }
}
