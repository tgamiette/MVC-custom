<?php
//JABANDONNE


//namespace App\Manager;
//
//use App\Entity\Image;
//
//class ImageManager extends BaseManager
//{
//
//    public function findAll(): array
//    {
//        $query = $this->db->query("SELECT * FROM image");;
//        $tab = $query->fetchAll(\PDO::FETCH_ASSOC);
//        $result = [];
//        foreach ($tab as $image) {
//            $result[] = new Image($image);
//        }
//
//        return $result;
//    }
//
//    public function findById(int $id)
//    {
//        $query = $this->db->prepare('SELECT * FROM image WHERE img_id = :id');
//        $query->bindValue(':id', $id, \PDO::PARAM_INT);
//        $query->execute();
//        $result = $query->fetch(\PDO::FETCH_ASSOC);
//        if ($result != false) {
//            return new Image($result);
//        }
//
//        return [];
//    }
//
//    public function deleteById(int $id): bool
//    {
//        $query = $this->db->prepare('DELETE FROM image WHERE img_id = :id');
//        $query->bindValue(':id', $id, \PDO::PARAM_INT);
//
//        return $query->execute();
//    }
//
//    public function add(Image $image): bool
//    {
//        $sql = "INSERT INTO `image` (`img_nom`, `img_taille`, `img_type`, img_desc, `img_blob`) VALUES (:nom, :taille, :type, :desc, :blob);";
//        $request = $this->db->prepare($sql);
//        $request->bindValue(':nom', $image->getImgNom(), \PDO::PARAM_STR);
//        $request->bindValue(':taille', $image->getImgTaille(), \PDO::PARAM_INT);
//        $request->bindValue(':type', $image->getImgBLOB(), \PDO::PARAM_STR);
//        $request->bindValue(':desc', $image->getImgDesc(), \PDO::PARAM_STR);
//        $request->bindValue(':blob', $image->getImgBlob()x);
//
//        return $request->execute();
//    }
//
//    public function update(Image $image): bool
//    {
//        $sql = "UPDATE `image` SET `img_nom` = ':nom',
//                                    `img_taille` = ':taille',
//                                    `img_type`= ':type',
//                                     `img_desc` = ':desc',
//                                     `img_blob` = ':blob'
//                        WHERE `image`.`img_id` = ':id';";
//
//        $request = $this->db->prepare($sql);
//        $request->bindValue(':nom', $image->getImgNom(), \PDO::PARAM_STR);
//        $request->bindValue(':taille', $image->getImgTaille(), \PDO::PARAM_INT);
//        $request->bindValue(':type', $image->getImgBLOB(), \PDO::PARAM_STR);
//        $request->bindValue(':desc', $image->getImgDesc(), \PDO::PARAM_STR);
//        $request->bindValue(':blob', $image->getImgBlob(), \PDO::PARAM_STR);
//
//        return $request->execute();
//    }
//
//    public function updateByPostId(int $id, Image $image)
//    {
//        $sql = "UPDATE `image` SET `img_nom` = ':author_id',
//                                    `img_taille` = ':taille',
//                                    `img_type`= ':type',
//                                     `img_desc` = ':desc',
//                                     `img_blob` = ':blob'
//                        WHERE `image`.`img_id` = ':id'";
//
//        $request = $this->db->prepare($sql);
//        $request->bindValue(':nom', $image->getImgNom(), \PDO::PARAM_STR);
//        $request->bindValue(':taille', $image->getImgTaille(), \PDO::PARAM_INT);
//        $request->bindValue(':type', $image->getImgBLOB(), \PDO::PARAM_STR);
//        $request->bindValue(':desc', $image->getImgDesc(), \PDO::PARAM_STR);
//        $request->bindValue(':blob', $image->getImgBlob(), \PDO::PARAM_STR);
//
//        return $request->execute();
//    }
//}