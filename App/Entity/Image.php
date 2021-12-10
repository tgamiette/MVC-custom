<?php

namespace App\Entity;

class Image extends BaseEntity
{
    private int $imgId;
    private string $imgNom;
    private int $imgTaille;
    private string $imgType;
    private string $imgDesc;
    private  $imgBLOB;

    /**
     * @return int
     */
    public function getImgId(): int
    {
        return $this->imgId;
    }

    /**
     * @param int $imgId
     */
    public function setImgId(int $imgId): void
    {
        $this->imgId = $imgId;
    }

    /**
     * @return string
     */
    public function getImgNom(): string
    {
        return $this->imgNom;
    }

    /**
     * @param string $imgNom
     */
    public function setImgNom(string $imgNom): void
    {
        $this->imgNom = $imgNom;
    }

    /**
     * @return int
     */
    public function getImgTaille(): int
    {
        return $this->imgTaille;
    }

    /**
     * @param int $imgTaille
     */
    public function setImgTaille(int $imgTaille): void
    {
        $this->imgTaille = $imgTaille;
    }

    /**
     * @return string
     */
    public function getImgType(): string
    {
        return $this->imgType;
    }

    /**
     * @param string $imgType
     */
    public function setImgType(string $imgType): void
    {
        $this->imgType = $imgType;
    }

    /**
     * @return string
     */
    public function getImgDesc(): string
    {
        return $this->imgDesc;
    }

    /**
     * @param string $imgDesc
     */
    public function setImgDesc(string $imgDesc): void
    {
        $this->imgDesc = $imgDesc;
    }

    /**
     * @return mixed
     */
    public function getImgBLOB()
    {
        return $this->imgBLOB;
    }

    /**
     * @param mixed $imgBLOB
     */
    public function setImgBLOB($imgBLOB): void
    {
        $this->imgBLOB = $imgBLOB;
    }

}