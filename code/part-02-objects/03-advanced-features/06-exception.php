<?php
class XmlException extends Exception{}
class FileException extends Exception{}
class ConfException extends Exception{}

try {
    throw new Exception("Just Try Try");
} catch (FileException $e) {
    // do someting
} catch (XmlException $e) {
    // do someting
} catch (Exception $e) {
    // do someting
}
