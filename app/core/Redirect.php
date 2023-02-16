<?php 
namespace larava\core;
trait RedirectTrait
{
    protected $url;
    protected $status;

    public function redirect($url, $status = 302)
    {
        $this->url = $url;
        $this->status = $status;
        $this->with('url', $url)->with('status', $status);
        $this->send();
    }

    public function with($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function send()
    {
        header("Location: {$this->url}", true, $this->status);
        exit;
    }
}
