<?phpnamespace Grilabs_Shipmendo;class ShipmentCompany {    private $slug;    private $name;    private $logo;    private $tracking_url_base;    /**     * @param $slug     * @param $name     * @param $logo     * @param $tracking_url_base     */    public function __construct($slug, $name, $logo, $tracking_url_base)    {        $this->slug = $slug;        $this->name = $name;        $this->logo = $logo;        $this->tracking_url_base = $tracking_url_base;    }    /**     * @return mixed     */    public function getSlug()    {        return $this->slug;    }    /**     * @param mixed $slug     */    public function setSlug($slug)    {        $this->slug = $slug;    }    /**     * @return mixed     */    public function getName()    {        return $this->name;    }    /**     * @param mixed $name     */    public function setName($name)    {        $this->name = $name;    }    /**     * @return mixed     */    public function getLogo()    {        return $this->logo;    }    /**     * @param mixed $logo     */    public function setLogo($logo)    {        $this->logo = $logo;    }    /**     * @return mixed     */    public function getTrackingUrlBase()    {        return $this->tracking_url_base;    }    /**     * @param mixed $tracking_url_base     */    public function setTrackingUrlBase($tracking_url_base)    {        $this->tracking_url_base = $tracking_url_base;    }}