                                                        

<?php

class Furniture{

    /**
     * return @void
     */

    static public function getAll(){
        $stmt = DB::connect()->prepare("SELECT * FROM furniture");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;

    }
    



    static public function getFurniture($data)
    {
        $id = $data['id'];
        try {
            $query = "SELECT * FROM furniture WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $furniture = $statement->fetch(PDO::FETCH_OBJ);
            return $furniture;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    

    static public function add($data)
    {
        $stmt = DB::connect()->prepare("INSERT INTO furniture(name,prix,image) VALUES (:name,:prix,:image)");
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':prix', $data['prix'], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return 'ok';


        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare("UPDATE furniture SET name = :name,prix = :prix,image = :image WHERE id = :id");

        $stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':name',$data['name']);
		$stmt->bindParam(':prix',$data['prix']);
		$stmt->bindParam(':image',$data['image']);
        if ($stmt->execute()) {

            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }



    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = "DELETE FROM furniture WHERE id=:id";
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            if ($statement->execute()) {

                return 'ok';
            } else {
                return 'error';
            }
            $statement->close();
            $statement = null;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
                                                        
                                                    