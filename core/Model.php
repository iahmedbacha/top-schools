<?php
class Model {
    static $connections = array();
    public $conf = 'default';
    public $pdo;
    public $table = false;

    public function __construct () {
        $conf = Conf::$db[$this->conf];
        if (!isset(Model::$connections[$this->conf])) {
            try {
                $this->pdo = new PDO('mysql:host='.$conf['host'].';dbname='.$conf['dbname'], $conf['username'], $conf['password'], $conf['options']);
                Model::$connections[$this->conf] = $this->pdo;
            }
            catch (PDOException $e) {
                die('Could not connect to the database $dbname :' . $e->getMessage());
            }
        }
        else {
            $this->pdo = Model::$connections[$this->conf];
        }
        if (!$this->table) {
            $this->table = strtoLower(get_class($this));
        }
    }

    public function get ($req = null) {
        $sql='select * from '.$this->table;
        if (isset($req['conditions'])) {
            $sql .= ' where ';
            foreach ($req['conditions'] as $key => $value) {
                $cond[] = "$key = $value";
            }
            $sql .= implode(' and ', $cond);
        }
        $stmt = $this->pdo->prepare($sql);
	    $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getFirst ($req) {
        return current($this->get($req));
    }

    public function insert ($req) {
        $sql='insert into '.$this->table;
        $sql .= ' ( ';
        foreach ($req['values'] as $key => $value) {
            $keys[] = "$key";
        }
        $sql .= implode(' , ', $keys);
        $sql .= ' ) values (';
        foreach ($req['values'] as $key => $value) {
            $values[] = "$value";
        }
        $sql .= implode(' , ', $values);
        $sql .= ' )';
        print_r('sql = '.$sql);
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update ($req) {
        $sql='update '.$this->table;
        $sql .= ' set ';
        foreach ($req['values'] as $key => $value) {
            $values[] = "$key = $value";
        }
        $sql .= implode(' , ', $keys);
        $sql .= ' where ';
        foreach ($req['conditions'] as $key => $value) {
            $cond[] = "$key = $value";
        }
        $sql .= implode(' and ', $cond);
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete ($req) {
        $sql='delete from '.$this->table;
        if (isset($req['conditions'])) {
            $sql .= ' where ';
            foreach ($req['conditions'] as $key => $value) {
                $cond[] = "$key = $value";
            }
            $sql .= implode(' and ', $cond);
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getLeftJoin ($req) {
        $sql='select * from '.$this->table.' left join '.$req['table'];
        $sql .= ' on ';
        foreach ($req['onConditions'] as $key => $value) {
            $onCond[] = "$key = $value";
        }
        $sql .= implode(' and ', $onCond);
        if (isset($req['conditions'])) {
            $sql .= ' where ';
            foreach ($req['conditions'] as $key => $value) {
                $cond[] = "$key = $value";
            }
            $sql .= implode(' and ', $cond);
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
?>