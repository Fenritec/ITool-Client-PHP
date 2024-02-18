<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class V1ClientClientProprieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1ClientClientPropriete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RtvDesignation', $data)) {
                $object->setRtvDesignation($data['RtvDesignation']);
                unset($data['RtvDesignation']);
            }
            if (\array_key_exists('Compte', $data)) {
                $object->setCompte($data['Compte']);
                unset($data['Compte']);
            }
            if (\array_key_exists('SousCompte', $data)) {
                $object->setSousCompte($data['SousCompte']);
                unset($data['SousCompte']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['RtvDesignation'] = $object->getRtvDesignation();
            if ($object->isInitialized('compte') && null !== $object->getCompte()) {
                $data['Compte'] = $object->getCompte();
            }
            if ($object->isInitialized('sousCompte') && null !== $object->getSousCompte()) {
                $data['SousCompte'] = $object->getSousCompte();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete' => false];
        }
    }
} else {
    class V1ClientClientProprieteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1ClientClientPropriete();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('RtvDesignation', $data)) {
                $object->setRtvDesignation($data['RtvDesignation']);
                unset($data['RtvDesignation']);
            }
            if (\array_key_exists('Compte', $data)) {
                $object->setCompte($data['Compte']);
                unset($data['Compte']);
            }
            if (\array_key_exists('SousCompte', $data)) {
                $object->setSousCompte($data['SousCompte']);
                unset($data['SousCompte']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['RtvDesignation'] = $object->getRtvDesignation();
            if ($object->isInitialized('compte') && null !== $object->getCompte()) {
                $data['Compte'] = $object->getCompte();
            }
            if ($object->isInitialized('sousCompte') && null !== $object->getSousCompte()) {
                $data['SousCompte'] = $object->getSousCompte();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete' => false];
        }
    }
}