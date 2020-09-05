<?php

namespace OOPLearn\AdvancedTools\Lesson6;
// Обработка ошибок и их логирование в xml файл

class Conf
{
    private string $file;
    private $xml;
    private $lastmatch;

    public function __construct(string $file)
    {
        $this->file = $file;
        // исключения
        if (! file_exists($file))
        {
            throw new \Exception("Файл '$file' не найден");
        }

        $this->xml = simplexml_load_file(
            $file, null, LIBXML_NOERROR);
        if (! is_object($this->xml)) {
            throw new XmlException(libxml_get_last_error());
        }

        $matches = $this->xml->xpath("/conf");
        if (! count($matches))
        {
            throw new ConfException(
                "Не найден корневой элемент: conf");
        }
    }


    public function write()

    {
        if (! is_writable($this->file))
        {
            // исключения
            throw new \FileException(
                "Файл '{$this->file}' недоступен для записи"
        );
        }
        file_put_contents($this->file, $this->xml->asXML());
    }


    public function get(string $str)
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"str\]");
        if (count($matches))
        {
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }
        return null;
    }


    public function set(string $key, string $value)
    {
        if (! is_null($this->get($key)))
        {
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;

        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }

    public static function init()
    {
        try {
            $fh = fopen(__DIR__ . "/log.txt", "a");
            fputs($fh, "Начало\n");
            $conf = new Conf(dirname(__FILE__) . "/conf.broken.xml");
            echo "user: " . $conf->get('user') . "\n";
            echo "host: " . $conf->get('host') . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
        } catch (FileException $e) {
            // Файл не существует или недоступен
            fputs($fh, "Проблемы с файлом\n");
            throw $e;
        } catch (XmlException $e) {
            // Повреждённый XML-файл
            fputs($fh, "Проблемы с XML\n");
        } catch (ConfException $e) {
            // Неверный формат XML-файла
            fputs($fh, "Проблемы с конфигурацией \n");
        } catch (\Exception $e) {
            // Ловушка джокера: этот код не должен вызываться
            fputs($fh, "Непредиденные проблемы \n");

        } finally {
            fputs($fh, "Конец\n");
            fclose($fh);
        }
    }
}


try {
    $conf = new Conf(__DIR__ . "/conf01.xml");
    echo "user: " . $conf->get('user') . "<br />\n";
    echo "host: " . $conf->get('host') . "<br />\n";
    $conf->write();
    } catch (\Exception $e) {
    die($e->__toString());
}