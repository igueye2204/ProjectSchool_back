<?php

namespace App;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class Main
{
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        return $this->serializer = $serializer;
    }

    public function getAllUser($repo)
    {
        $data = $repo->findBy(['archive' => false]);
        $dataJson = $this->serializer->serialize($data, "json", [
            "groups" => ["user:read"]
        ]);
        return new JsonResponse($dataJson, Response::HTTP_CREATED, [], true);
    }

    public function getDeleted($repo)
    {
        $data = $repo->findBy(['archive' => true]);
        $dataJson = $this->serializer->serialize($data, "json", [
            "groups" => ["user:read"]
        ]);
        return new JsonResponse($dataJson, Response::HTTP_CREATED, [], true);
    }

    public function getAllProfil($repo)
    {
        $data = $repo->findBy(['archive' => false]);
        $dataJson = $this->serializer->serialize($data, "json", [
            "groups" => ["profil:read"]
        ]);
        return new JsonResponse($dataJson, Response::HTTP_CREATED, [], true);
    }

    public function getProfilDeleted($repo)
    {
        $data = $repo->findBy(['archive' => true]);
        $dataJson = $this->serializer->serialize($data, "json", [
            "groups" => ["profil:read"]
        ]);
        return new JsonResponse($dataJson, Response::HTTP_CREATED, [], true);
    }

    public function getAllProfilSortie($repo)
    {
        $data = $repo->findBy(['archive' => false]);
        $dataJson = $this->serializer->serialize($data, "json", [
            "groups" => ["ProfilSortie:read"]
        ]);
        return new JsonResponse($dataJson, Response::HTTP_CREATED, [], true);
    }

    public function getProfilSortieDeleted($repo)
    {
        $data = $repo->findBy(['archive' => true]);
        $dataJson = $this->serializer->serialize($data, "json", [
            "groups" => ["ProfilSortie:read"]
        ]);
        return new JsonResponse($dataJson, Response::HTTP_CREATED, [], true);
    }
}
